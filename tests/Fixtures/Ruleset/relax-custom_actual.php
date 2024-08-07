<?php
namespace Realodix\Relax;

use DateTime;

/**
 * FooRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class RelaxCustom
{
    /**
     * @var RelaxCustom PhpdocSelfAccessorFixer
     */
    private $instance;

    /**
     * @var array<int,string>
     */
    private $phpdocTypesCommaSpacesFixer;

    /** Hello
     * World!
     */
    public function multilineCommentOpeningClosingAloneFixer() {}

    public function noImportFromGlobalNamespaceFixer(DateTime $dateTime) {}

    /**
     * Created by PhpStorm.
     * User: root * Date: 01.01.70
     * Time: 12:00
     */
    public function noPhpStormGeneratedCommentFixer() {}

    /**
     * @param bool   $b
     * @param int    $i
     * @param string $s this is string
     * @param string $s duplicated
     */
    public function phpdocNoSuperfluousParamFixer() {}

    /**
     * @param string $foo Comment
     * @param $bar Comment
     */
    public function phpdocParamTypeFixer($foo, $bar) {}

    /**
     * @param null | string $x
     */
    public function phpdocTypesTrimFixer($x) {}
}
