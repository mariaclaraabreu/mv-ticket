<?php

require_once __DIR__.'/../src/autorun.php';
require_once __DIR__.'/../src/arguments.php';

class TestOfCommandLineArgumentParsing extends UnitTestCase
{
    public function testArgumentListWithJustProgramNameGivesFalseToEveryName()
    {
        $arguments = new SimpleArguments(['me']);
        $this->assertIdentical($arguments->a, false);
        $this->assertIdentical($arguments->all(), []);
    }

    public function testSingleArgumentNameRecordedAsTrue()
    {
        $arguments = new SimpleArguments(['me', '-a']);
        $this->assertIdentical($arguments->a, true);
    }

    public function testSingleArgumentCanBeGivenAValue()
    {
        $arguments = new SimpleArguments(['me', '-a=AAA']);
        $this->assertIdentical($arguments->a, 'AAA');
    }

    public function testSingleArgumentCanBeGivenSpaceSeparatedValue()
    {
        $arguments = new SimpleArguments(['me', '-a', 'AAA']);
        $this->assertIdentical($arguments->a, 'AAA');
    }

    public function testWillBuildArrayFromRepeatedValue()
    {
        $arguments = new SimpleArguments(['me', '-a', 'A', '-a', 'AA']);
        $this->assertIdentical($arguments->a, ['A', 'AA']);
    }

    public function testWillBuildArrayFromMultiplyRepeatedValues()
    {
        $arguments = new SimpleArguments(['me', '-a', 'A', '-a', 'AA', '-a', 'AAA']);
        $this->assertIdentical($arguments->a, ['A', 'AA', 'AAA']);
    }

    public function testCanParseLongFormArguments()
    {
        $arguments = new SimpleArguments(['me', '--aa=AA', '--bb', 'BB']);
        $this->assertIdentical($arguments->aa, 'AA');
        $this->assertIdentical($arguments->bb, 'BB');
    }

    public function testGetsFullSetOfResultsAsHash()
    {
        $arguments = new SimpleArguments(['me', '-a', '-b=1', '-b', '2', '--aa=AA', '--bb', 'BB', '-c']);
        $this->assertEqual(
            $arguments->all(),
            ['a' => true, 'b' => ['1', '2'], 'aa' => 'AA', 'bb' => 'BB', 'c' => true]
        );
    }
}

class TestOfHelpOutput extends UnitTestCase
{
    public function testDisplaysGeneralHelpBanner()
    {
        $help = new SimpleHelp('Cool program');
        $this->assertEqual($help->render(), "Cool program\n");
    }

    public function testDisplaysOnlySingleLineEndings()
    {
        $help = new SimpleHelp("Cool program\n");
        $this->assertEqual($help->render(), "Cool program\n");
    }

    public function testDisplaysHelpOnShortFlag()
    {
        $help = new SimpleHelp('Cool program');
        $help->explainFlag('a', 'Enables A');
        $this->assertEqual($help->render(), "Cool program\n-a    Enables A\n");
    }

    public function testHasAtleastFourSpacesAfterLongestFlag()
    {
        $help = new SimpleHelp('Cool program');
        $help->explainFlag('a', 'Enables A');
        $help->explainFlag('long', 'Enables Long');
        $this->assertEqual(
            $help->render(),
            "Cool program\n-a        Enables A\n--long    Enables Long\n"
        );
    }

    public function testCanDisplaysMultipleFlagsForEachOption()
    {
        $help = new SimpleHelp('Cool program');
        $help->explainFlag(['a', 'aa'], 'Enables A');
        $this->assertEqual($help->render(), "Cool program\n-a      Enables A\n  --aa\n");
    }
}
