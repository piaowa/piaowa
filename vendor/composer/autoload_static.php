<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4d02789f4b5188484f73385ba35e864a
{
    public static $files = array (
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '25072dd6e2470089de65ae7bf11d3109' => __DIR__ . '/..' . '/symfony/polyfill-php72/bootstrap.php',
        'a9ed0d27b5a698798a89181429f162c5' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/Common/customFunctions.php',
        '667aeda72477189d0494fecd327c3641' => __DIR__ . '/..' . '/symfony/var-dumper/Resources/functions/dump.php',
    );

    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'piaowa\\' => 7,
        ),
        'e' => 
        array (
            'extend\\' => 7,
        ),
        'Z' => 
        array (
            'Zxing\\' => 6,
        ),
        'W' => 
        array (
            'Whoops\\' => 7,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Php72\\' => 23,
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Polyfill\\Ctype\\' => 23,
            'Symfony\\Component\\VarDumper\\' => 28,
            'Symfony\\Component\\PropertyAccess\\' => 33,
            'Symfony\\Component\\OptionsResolver\\' => 34,
            'Symfony\\Component\\Inflector\\' => 28,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'MyCLabs\\Enum\\' => 13,
            'Medoo\\' => 6,
        ),
        'E' => 
        array (
            'Endroid\\QrCode\\' => 15,
        ),
        'D' => 
        array (
            'DASPRiD\\Enum\\' => 13,
        ),
        'B' => 
        array (
            'BaconQrCode\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'piaowa\\' => 
        array (
            0 => __DIR__ . '/../..' . '/piaowa',
        ),
        'extend\\' => 
        array (
            0 => __DIR__ . '/../..' . '/extend',
        ),
        'Zxing\\' => 
        array (
            0 => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib',
        ),
        'Whoops\\' => 
        array (
            0 => __DIR__ . '/..' . '/filp/whoops/src/Whoops',
        ),
        'Symfony\\Polyfill\\Php72\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php72',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'Symfony\\Component\\VarDumper\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/var-dumper',
        ),
        'Symfony\\Component\\PropertyAccess\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/property-access',
        ),
        'Symfony\\Component\\OptionsResolver\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/options-resolver',
        ),
        'Symfony\\Component\\Inflector\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/inflector',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'MyCLabs\\Enum\\' => 
        array (
            0 => __DIR__ . '/..' . '/myclabs/php-enum/src',
        ),
        'Medoo\\' => 
        array (
            0 => __DIR__ . '/..' . '/catfan/medoo/src',
        ),
        'Endroid\\QrCode\\' => 
        array (
            0 => __DIR__ . '/..' . '/endroid/qr-code/src',
        ),
        'DASPRiD\\Enum\\' => 
        array (
            0 => __DIR__ . '/..' . '/dasprid/enum/src',
        ),
        'BaconQrCode\\' => 
        array (
            0 => __DIR__ . '/..' . '/bacon/bacon-qr-code/src',
        ),
    );

    public static $classMap = array (
        'BaconQrCode\\Common\\BitArray' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Common/BitArray.php',
        'BaconQrCode\\Common\\BitMatrix' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Common/BitMatrix.php',
        'BaconQrCode\\Common\\BitUtils' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Common/BitUtils.php',
        'BaconQrCode\\Common\\CharacterSetEci' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Common/CharacterSetEci.php',
        'BaconQrCode\\Common\\EcBlock' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Common/EcBlock.php',
        'BaconQrCode\\Common\\EcBlocks' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Common/EcBlocks.php',
        'BaconQrCode\\Common\\ErrorCorrectionLevel' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Common/ErrorCorrectionLevel.php',
        'BaconQrCode\\Common\\FormatInformation' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Common/FormatInformation.php',
        'BaconQrCode\\Common\\Mode' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Common/Mode.php',
        'BaconQrCode\\Common\\ReedSolomonCodec' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Common/ReedSolomonCodec.php',
        'BaconQrCode\\Common\\Version' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Common/Version.php',
        'BaconQrCode\\Encoder\\BlockPair' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Encoder/BlockPair.php',
        'BaconQrCode\\Encoder\\ByteMatrix' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Encoder/ByteMatrix.php',
        'BaconQrCode\\Encoder\\Encoder' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Encoder/Encoder.php',
        'BaconQrCode\\Encoder\\MaskUtil' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Encoder/MaskUtil.php',
        'BaconQrCode\\Encoder\\MatrixUtil' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Encoder/MatrixUtil.php',
        'BaconQrCode\\Encoder\\QrCode' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Encoder/QrCode.php',
        'BaconQrCode\\Exception\\ExceptionInterface' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Exception/ExceptionInterface.php',
        'BaconQrCode\\Exception\\InvalidArgumentException' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Exception/InvalidArgumentException.php',
        'BaconQrCode\\Exception\\OutOfBoundsException' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Exception/OutOfBoundsException.php',
        'BaconQrCode\\Exception\\RuntimeException' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Exception/RuntimeException.php',
        'BaconQrCode\\Exception\\UnexpectedValueException' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Exception/UnexpectedValueException.php',
        'BaconQrCode\\Exception\\WriterException' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Exception/WriterException.php',
        'BaconQrCode\\Renderer\\Color\\Alpha' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Renderer/Color/Alpha.php',
        'BaconQrCode\\Renderer\\Color\\Cmyk' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Renderer/Color/Cmyk.php',
        'BaconQrCode\\Renderer\\Color\\ColorInterface' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Renderer/Color/ColorInterface.php',
        'BaconQrCode\\Renderer\\Color\\Gray' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Renderer/Color/Gray.php',
        'BaconQrCode\\Renderer\\Color\\Rgb' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Renderer/Color/Rgb.php',
        'BaconQrCode\\Renderer\\Eye\\CompositeEye' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Renderer/Eye/CompositeEye.php',
        'BaconQrCode\\Renderer\\Eye\\EyeInterface' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Renderer/Eye/EyeInterface.php',
        'BaconQrCode\\Renderer\\Eye\\ModuleEye' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Renderer/Eye/ModuleEye.php',
        'BaconQrCode\\Renderer\\Eye\\SimpleCircleEye' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Renderer/Eye/SimpleCircleEye.php',
        'BaconQrCode\\Renderer\\Eye\\SquareEye' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Renderer/Eye/SquareEye.php',
        'BaconQrCode\\Renderer\\ImageRenderer' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Renderer/ImageRenderer.php',
        'BaconQrCode\\Renderer\\Image\\EpsImageBackEnd' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Renderer/Image/EpsImageBackEnd.php',
        'BaconQrCode\\Renderer\\Image\\ImageBackEndInterface' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Renderer/Image/ImageBackEndInterface.php',
        'BaconQrCode\\Renderer\\Image\\ImagickImageBackEnd' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Renderer/Image/ImagickImageBackEnd.php',
        'BaconQrCode\\Renderer\\Image\\SvgImageBackEnd' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Renderer/Image/SvgImageBackEnd.php',
        'BaconQrCode\\Renderer\\Image\\TransformationMatrix' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Renderer/Image/TransformationMatrix.php',
        'BaconQrCode\\Renderer\\Module\\DotsModule' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Renderer/Module/DotsModule.php',
        'BaconQrCode\\Renderer\\Module\\EdgeIterator\\Edge' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Renderer/Module/EdgeIterator/Edge.php',
        'BaconQrCode\\Renderer\\Module\\EdgeIterator\\EdgeIterator' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Renderer/Module/EdgeIterator/EdgeIterator.php',
        'BaconQrCode\\Renderer\\Module\\ModuleInterface' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Renderer/Module/ModuleInterface.php',
        'BaconQrCode\\Renderer\\Module\\RoundnessModule' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Renderer/Module/RoundnessModule.php',
        'BaconQrCode\\Renderer\\Module\\SquareModule' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Renderer/Module/SquareModule.php',
        'BaconQrCode\\Renderer\\Path\\Close' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Renderer/Path/Close.php',
        'BaconQrCode\\Renderer\\Path\\Curve' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Renderer/Path/Curve.php',
        'BaconQrCode\\Renderer\\Path\\EllipticArc' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Renderer/Path/EllipticArc.php',
        'BaconQrCode\\Renderer\\Path\\Line' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Renderer/Path/Line.php',
        'BaconQrCode\\Renderer\\Path\\Move' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Renderer/Path/Move.php',
        'BaconQrCode\\Renderer\\Path\\OperationInterface' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Renderer/Path/OperationInterface.php',
        'BaconQrCode\\Renderer\\Path\\Path' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Renderer/Path/Path.php',
        'BaconQrCode\\Renderer\\PlainTextRenderer' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Renderer/PlainTextRenderer.php',
        'BaconQrCode\\Renderer\\RendererInterface' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Renderer/RendererInterface.php',
        'BaconQrCode\\Renderer\\RendererStyle\\EyeFill' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Renderer/RendererStyle/EyeFill.php',
        'BaconQrCode\\Renderer\\RendererStyle\\Fill' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Renderer/RendererStyle/Fill.php',
        'BaconQrCode\\Renderer\\RendererStyle\\Gradient' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Renderer/RendererStyle/Gradient.php',
        'BaconQrCode\\Renderer\\RendererStyle\\GradientType' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Renderer/RendererStyle/GradientType.php',
        'BaconQrCode\\Renderer\\RendererStyle\\RendererStyle' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Renderer/RendererStyle/RendererStyle.php',
        'BaconQrCode\\Writer' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Writer.php',
        'DASPRiD\\Enum\\AbstractEnum' => __DIR__ . '/..' . '/dasprid/enum/src/AbstractEnum.php',
        'DASPRiD\\Enum\\EnumMap' => __DIR__ . '/..' . '/dasprid/enum/src/EnumMap.php',
        'DASPRiD\\Enum\\Exception\\CloneNotSupportedException' => __DIR__ . '/..' . '/dasprid/enum/src/Exception/CloneNotSupportedException.php',
        'DASPRiD\\Enum\\Exception\\ExceptionInterface' => __DIR__ . '/..' . '/dasprid/enum/src/Exception/ExceptionInterface.php',
        'DASPRiD\\Enum\\Exception\\ExpectationException' => __DIR__ . '/..' . '/dasprid/enum/src/Exception/ExpectationException.php',
        'DASPRiD\\Enum\\Exception\\IllegalArgumentException' => __DIR__ . '/..' . '/dasprid/enum/src/Exception/IllegalArgumentException.php',
        'DASPRiD\\Enum\\Exception\\MismatchException' => __DIR__ . '/..' . '/dasprid/enum/src/Exception/MismatchException.php',
        'DASPRiD\\Enum\\Exception\\SerializeNotSupportedException' => __DIR__ . '/..' . '/dasprid/enum/src/Exception/SerializeNotSupportedException.php',
        'DASPRiD\\Enum\\Exception\\UnserializeNotSupportedException' => __DIR__ . '/..' . '/dasprid/enum/src/Exception/UnserializeNotSupportedException.php',
        'DASPRiD\\Enum\\NullValue' => __DIR__ . '/..' . '/dasprid/enum/src/NullValue.php',
        'Medoo\\Medoo' => __DIR__ . '/..' . '/catfan/medoo/src/Medoo.php',
        'Medoo\\Raw' => __DIR__ . '/..' . '/catfan/medoo/src/Medoo.php',
        'MyCLabs\\Enum\\Enum' => __DIR__ . '/..' . '/myclabs/php-enum/src/Enum.php',
        'MyCLabs\\Enum\\PHPUnit\\Comparator' => __DIR__ . '/..' . '/myclabs/php-enum/src/PHPUnit/Comparator.php',
        'Psr\\Log\\AbstractLogger' => __DIR__ . '/..' . '/psr/log/Psr/Log/AbstractLogger.php',
        'Psr\\Log\\InvalidArgumentException' => __DIR__ . '/..' . '/psr/log/Psr/Log/InvalidArgumentException.php',
        'Psr\\Log\\LogLevel' => __DIR__ . '/..' . '/psr/log/Psr/Log/LogLevel.php',
        'Psr\\Log\\LoggerAwareInterface' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerAwareInterface.php',
        'Psr\\Log\\LoggerAwareTrait' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerAwareTrait.php',
        'Psr\\Log\\LoggerInterface' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerInterface.php',
        'Psr\\Log\\LoggerTrait' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerTrait.php',
        'Psr\\Log\\NullLogger' => __DIR__ . '/..' . '/psr/log/Psr/Log/NullLogger.php',
        'Psr\\Log\\Test\\DummyTest' => __DIR__ . '/..' . '/psr/log/Psr/Log/Test/DummyTest.php',
        'Psr\\Log\\Test\\LoggerInterfaceTest' => __DIR__ . '/..' . '/psr/log/Psr/Log/Test/LoggerInterfaceTest.php',
        'Psr\\Log\\Test\\TestLogger' => __DIR__ . '/..' . '/psr/log/Psr/Log/Test/TestLogger.php',
        'Symfony\\Component\\Inflector\\Inflector' => __DIR__ . '/..' . '/symfony/inflector/Inflector.php',
        'Symfony\\Component\\OptionsResolver\\Debug\\OptionsResolverIntrospector' => __DIR__ . '/..' . '/symfony/options-resolver/Debug/OptionsResolverIntrospector.php',
        'Symfony\\Component\\OptionsResolver\\Exception\\AccessException' => __DIR__ . '/..' . '/symfony/options-resolver/Exception/AccessException.php',
        'Symfony\\Component\\OptionsResolver\\Exception\\ExceptionInterface' => __DIR__ . '/..' . '/symfony/options-resolver/Exception/ExceptionInterface.php',
        'Symfony\\Component\\OptionsResolver\\Exception\\InvalidArgumentException' => __DIR__ . '/..' . '/symfony/options-resolver/Exception/InvalidArgumentException.php',
        'Symfony\\Component\\OptionsResolver\\Exception\\InvalidOptionsException' => __DIR__ . '/..' . '/symfony/options-resolver/Exception/InvalidOptionsException.php',
        'Symfony\\Component\\OptionsResolver\\Exception\\MissingOptionsException' => __DIR__ . '/..' . '/symfony/options-resolver/Exception/MissingOptionsException.php',
        'Symfony\\Component\\OptionsResolver\\Exception\\NoConfigurationException' => __DIR__ . '/..' . '/symfony/options-resolver/Exception/NoConfigurationException.php',
        'Symfony\\Component\\OptionsResolver\\Exception\\NoSuchOptionException' => __DIR__ . '/..' . '/symfony/options-resolver/Exception/NoSuchOptionException.php',
        'Symfony\\Component\\OptionsResolver\\Exception\\OptionDefinitionException' => __DIR__ . '/..' . '/symfony/options-resolver/Exception/OptionDefinitionException.php',
        'Symfony\\Component\\OptionsResolver\\Exception\\UndefinedOptionsException' => __DIR__ . '/..' . '/symfony/options-resolver/Exception/UndefinedOptionsException.php',
        'Symfony\\Component\\OptionsResolver\\Options' => __DIR__ . '/..' . '/symfony/options-resolver/Options.php',
        'Symfony\\Component\\OptionsResolver\\OptionsResolver' => __DIR__ . '/..' . '/symfony/options-resolver/OptionsResolver.php',
        'Symfony\\Component\\PropertyAccess\\Exception\\AccessException' => __DIR__ . '/..' . '/symfony/property-access/Exception/AccessException.php',
        'Symfony\\Component\\PropertyAccess\\Exception\\ExceptionInterface' => __DIR__ . '/..' . '/symfony/property-access/Exception/ExceptionInterface.php',
        'Symfony\\Component\\PropertyAccess\\Exception\\InvalidArgumentException' => __DIR__ . '/..' . '/symfony/property-access/Exception/InvalidArgumentException.php',
        'Symfony\\Component\\PropertyAccess\\Exception\\InvalidPropertyPathException' => __DIR__ . '/..' . '/symfony/property-access/Exception/InvalidPropertyPathException.php',
        'Symfony\\Component\\PropertyAccess\\Exception\\NoSuchIndexException' => __DIR__ . '/..' . '/symfony/property-access/Exception/NoSuchIndexException.php',
        'Symfony\\Component\\PropertyAccess\\Exception\\NoSuchPropertyException' => __DIR__ . '/..' . '/symfony/property-access/Exception/NoSuchPropertyException.php',
        'Symfony\\Component\\PropertyAccess\\Exception\\OutOfBoundsException' => __DIR__ . '/..' . '/symfony/property-access/Exception/OutOfBoundsException.php',
        'Symfony\\Component\\PropertyAccess\\Exception\\RuntimeException' => __DIR__ . '/..' . '/symfony/property-access/Exception/RuntimeException.php',
        'Symfony\\Component\\PropertyAccess\\Exception\\UnexpectedTypeException' => __DIR__ . '/..' . '/symfony/property-access/Exception/UnexpectedTypeException.php',
        'Symfony\\Component\\PropertyAccess\\PropertyAccess' => __DIR__ . '/..' . '/symfony/property-access/PropertyAccess.php',
        'Symfony\\Component\\PropertyAccess\\PropertyAccessor' => __DIR__ . '/..' . '/symfony/property-access/PropertyAccessor.php',
        'Symfony\\Component\\PropertyAccess\\PropertyAccessorBuilder' => __DIR__ . '/..' . '/symfony/property-access/PropertyAccessorBuilder.php',
        'Symfony\\Component\\PropertyAccess\\PropertyAccessorInterface' => __DIR__ . '/..' . '/symfony/property-access/PropertyAccessorInterface.php',
        'Symfony\\Component\\PropertyAccess\\PropertyPath' => __DIR__ . '/..' . '/symfony/property-access/PropertyPath.php',
        'Symfony\\Component\\PropertyAccess\\PropertyPathBuilder' => __DIR__ . '/..' . '/symfony/property-access/PropertyPathBuilder.php',
        'Symfony\\Component\\PropertyAccess\\PropertyPathInterface' => __DIR__ . '/..' . '/symfony/property-access/PropertyPathInterface.php',
        'Symfony\\Component\\PropertyAccess\\PropertyPathIterator' => __DIR__ . '/..' . '/symfony/property-access/PropertyPathIterator.php',
        'Symfony\\Component\\PropertyAccess\\PropertyPathIteratorInterface' => __DIR__ . '/..' . '/symfony/property-access/PropertyPathIteratorInterface.php',
        'Symfony\\Component\\VarDumper\\Caster\\AmqpCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/AmqpCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\ArgsStub' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/ArgsStub.php',
        'Symfony\\Component\\VarDumper\\Caster\\Caster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/Caster.php',
        'Symfony\\Component\\VarDumper\\Caster\\ClassStub' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/ClassStub.php',
        'Symfony\\Component\\VarDumper\\Caster\\ConstStub' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/ConstStub.php',
        'Symfony\\Component\\VarDumper\\Caster\\CutArrayStub' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/CutArrayStub.php',
        'Symfony\\Component\\VarDumper\\Caster\\CutStub' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/CutStub.php',
        'Symfony\\Component\\VarDumper\\Caster\\DOMCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/DOMCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\DateCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/DateCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\DoctrineCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/DoctrineCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\EnumStub' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/EnumStub.php',
        'Symfony\\Component\\VarDumper\\Caster\\ExceptionCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/ExceptionCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\FrameStub' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/FrameStub.php',
        'Symfony\\Component\\VarDumper\\Caster\\LinkStub' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/LinkStub.php',
        'Symfony\\Component\\VarDumper\\Caster\\PdoCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/PdoCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\PgSqlCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/PgSqlCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\RedisCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/RedisCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/ReflectionCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\ResourceCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/ResourceCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\SplCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/SplCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\StubCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/StubCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\SymfonyCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/SymfonyCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\TraceStub' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/TraceStub.php',
        'Symfony\\Component\\VarDumper\\Caster\\XmlReaderCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/XmlReaderCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\XmlResourceCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/XmlResourceCaster.php',
        'Symfony\\Component\\VarDumper\\Cloner\\AbstractCloner' => __DIR__ . '/..' . '/symfony/var-dumper/Cloner/AbstractCloner.php',
        'Symfony\\Component\\VarDumper\\Cloner\\ClonerInterface' => __DIR__ . '/..' . '/symfony/var-dumper/Cloner/ClonerInterface.php',
        'Symfony\\Component\\VarDumper\\Cloner\\Cursor' => __DIR__ . '/..' . '/symfony/var-dumper/Cloner/Cursor.php',
        'Symfony\\Component\\VarDumper\\Cloner\\Data' => __DIR__ . '/..' . '/symfony/var-dumper/Cloner/Data.php',
        'Symfony\\Component\\VarDumper\\Cloner\\DumperInterface' => __DIR__ . '/..' . '/symfony/var-dumper/Cloner/DumperInterface.php',
        'Symfony\\Component\\VarDumper\\Cloner\\Stub' => __DIR__ . '/..' . '/symfony/var-dumper/Cloner/Stub.php',
        'Symfony\\Component\\VarDumper\\Cloner\\VarCloner' => __DIR__ . '/..' . '/symfony/var-dumper/Cloner/VarCloner.php',
        'Symfony\\Component\\VarDumper\\Dumper\\AbstractDumper' => __DIR__ . '/..' . '/symfony/var-dumper/Dumper/AbstractDumper.php',
        'Symfony\\Component\\VarDumper\\Dumper\\CliDumper' => __DIR__ . '/..' . '/symfony/var-dumper/Dumper/CliDumper.php',
        'Symfony\\Component\\VarDumper\\Dumper\\DataDumperInterface' => __DIR__ . '/..' . '/symfony/var-dumper/Dumper/DataDumperInterface.php',
        'Symfony\\Component\\VarDumper\\Dumper\\HtmlDumper' => __DIR__ . '/..' . '/symfony/var-dumper/Dumper/HtmlDumper.php',
        'Symfony\\Component\\VarDumper\\Exception\\ThrowingCasterException' => __DIR__ . '/..' . '/symfony/var-dumper/Exception/ThrowingCasterException.php',
        'Symfony\\Component\\VarDumper\\Test\\VarDumperTestTrait' => __DIR__ . '/..' . '/symfony/var-dumper/Test/VarDumperTestTrait.php',
        'Symfony\\Component\\VarDumper\\VarDumper' => __DIR__ . '/..' . '/symfony/var-dumper/VarDumper.php',
        'Symfony\\Polyfill\\Ctype\\Ctype' => __DIR__ . '/..' . '/symfony/polyfill-ctype/Ctype.php',
        'Symfony\\Polyfill\\Mbstring\\Mbstring' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/Mbstring.php',
        'Symfony\\Polyfill\\Php72\\Php72' => __DIR__ . '/..' . '/symfony/polyfill-php72/Php72.php',
        'Whoops\\Exception\\ErrorException' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Exception/ErrorException.php',
        'Whoops\\Exception\\Formatter' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Exception/Formatter.php',
        'Whoops\\Exception\\Frame' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Exception/Frame.php',
        'Whoops\\Exception\\FrameCollection' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Exception/FrameCollection.php',
        'Whoops\\Exception\\Inspector' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Exception/Inspector.php',
        'Whoops\\Handler\\CallbackHandler' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Handler/CallbackHandler.php',
        'Whoops\\Handler\\Handler' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Handler/Handler.php',
        'Whoops\\Handler\\HandlerInterface' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Handler/HandlerInterface.php',
        'Whoops\\Handler\\JsonResponseHandler' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Handler/JsonResponseHandler.php',
        'Whoops\\Handler\\PlainTextHandler' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Handler/PlainTextHandler.php',
        'Whoops\\Handler\\PrettyPageHandler' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Handler/PrettyPageHandler.php',
        'Whoops\\Handler\\XmlResponseHandler' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Handler/XmlResponseHandler.php',
        'Whoops\\Run' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Run.php',
        'Whoops\\RunInterface' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/RunInterface.php',
        'Whoops\\Util\\HtmlDumperOutput' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Util/HtmlDumperOutput.php',
        'Whoops\\Util\\Misc' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Util/Misc.php',
        'Whoops\\Util\\SystemFacade' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Util/SystemFacade.php',
        'Whoops\\Util\\TemplateHelper' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Util/TemplateHelper.php',
        'Zxing\\Binarizer' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/Binarizer.php',
        'Zxing\\BinaryBitmap' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/BinaryBitmap.php',
        'Zxing\\ChecksumException' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/ChecksumException.php',
        'Zxing\\Common\\BitArray' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/Common/BitArray.php',
        'Zxing\\Common\\BitMatrix' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/Common/BitMatrix.php',
        'Zxing\\Common\\BitSource' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/Common/BitSource.php',
        'Zxing\\Common\\CharacterSetECI' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/Common/CharacterSetECI.php',
        'Zxing\\Common\\CharacterSetEci\\AbstractEnum\\AbstractEnum' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/Common/AbstractEnum.php',
        'Zxing\\Common\\DecoderResult' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/Common/DecoderResult.php',
        'Zxing\\Common\\DefaultGridSampler' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/Common/DefaultGridSampler.php',
        'Zxing\\Common\\DetectorResult' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/Common/DetectorResult.php',
        'Zxing\\Common\\Detector\\MathUtils' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/Common/Detector/MathUtils.php',
        'Zxing\\Common\\Detector\\MonochromeRectangleDetector' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/Common/Detector/MonochromeRectangleDetector.php',
        'Zxing\\Common\\GlobalHistogramBinarizer' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/Common/GlobalHistogramBinarizer.php',
        'Zxing\\Common\\GridSampler' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/Common/GridSampler.php',
        'Zxing\\Common\\HybridBinarizer' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/Common/HybridBinarizer.php',
        'Zxing\\Common\\PerspectiveTransform' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/Common/PerspectiveTransform.php',
        'Zxing\\Common\\Reedsolomon\\GenericGF' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/Common/Reedsolomon/GenericGF.php',
        'Zxing\\Common\\Reedsolomon\\GenericGFPoly' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/Common/Reedsolomon/GenericGFPoly.php',
        'Zxing\\Common\\Reedsolomon\\ReedSolomonDecoder' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/Common/Reedsolomon/ReedSolomonDecoder.php',
        'Zxing\\Common\\Reedsolomon\\ReedSolomonException' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/Common/Reedsolomon/ReedSolomonException.php',
        'Zxing\\FormatException' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/FormatException.php',
        'Zxing\\GDLuminanceSource' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/GDLuminanceSource.php',
        'Zxing\\IMagickLuminanceSource' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/IMagickLuminanceSource.php',
        'Zxing\\LuminanceSource' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/LuminanceSource.php',
        'Zxing\\NotFoundException' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/NotFoundException.php',
        'Zxing\\PlanarYUVLuminanceSource' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/PlanarYUVLuminanceSource.php',
        'Zxing\\QrReader' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/QrReader.php',
        'Zxing\\Qrcode\\Decoder\\BitMatrixParser' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/Qrcode/Decoder/BitMatrixParser.php',
        'Zxing\\Qrcode\\Decoder\\DataBlock' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/Qrcode/Decoder/DataBlock.php',
        'Zxing\\Qrcode\\Decoder\\DataMask' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/Qrcode/Decoder/DataMask.php',
        'Zxing\\Qrcode\\Decoder\\DataMask000' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/Qrcode/Decoder/DataMask.php',
        'Zxing\\Qrcode\\Decoder\\DataMask001' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/Qrcode/Decoder/DataMask.php',
        'Zxing\\Qrcode\\Decoder\\DataMask010' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/Qrcode/Decoder/DataMask.php',
        'Zxing\\Qrcode\\Decoder\\DataMask011' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/Qrcode/Decoder/DataMask.php',
        'Zxing\\Qrcode\\Decoder\\DataMask100' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/Qrcode/Decoder/DataMask.php',
        'Zxing\\Qrcode\\Decoder\\DataMask101' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/Qrcode/Decoder/DataMask.php',
        'Zxing\\Qrcode\\Decoder\\DataMask110' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/Qrcode/Decoder/DataMask.php',
        'Zxing\\Qrcode\\Decoder\\DataMask111' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/Qrcode/Decoder/DataMask.php',
        'Zxing\\Qrcode\\Decoder\\DecodedBitStreamParser' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/Qrcode/Decoder/DecodedBitStreamParser.php',
        'Zxing\\Qrcode\\Decoder\\Decoder' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/Qrcode/Decoder/Decoder.php',
        'Zxing\\Qrcode\\Decoder\\ECB' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/Qrcode/Decoder/Version.php',
        'Zxing\\Qrcode\\Decoder\\ECBlocks' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/Qrcode/Decoder/Version.php',
        'Zxing\\Qrcode\\Decoder\\ErrorCorrectionLevel' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/Qrcode/Decoder/ErrorCorrectionLevel.php',
        'Zxing\\Qrcode\\Decoder\\FormatInformation' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/Qrcode/Decoder/FormatInformation.php',
        'Zxing\\Qrcode\\Decoder\\Mode' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/Qrcode/Decoder/Mode.php',
        'Zxing\\Qrcode\\Decoder\\Version' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/Qrcode/Decoder/Version.php',
        'Zxing\\Qrcode\\Detector\\AlignmentPattern' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/Qrcode/Detector/AlignmentPattern.php',
        'Zxing\\Qrcode\\Detector\\AlignmentPatternFinder' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/Qrcode/Detector/AlignmentPatternFinder.php',
        'Zxing\\Qrcode\\Detector\\Detector' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/Qrcode/Detector/Detector.php',
        'Zxing\\Qrcode\\Detector\\FinderPattern' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/Qrcode/Detector/FinderPattern.php',
        'Zxing\\Qrcode\\Detector\\FinderPatternFinder' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/Qrcode/Detector/FinderPatternFinder.php',
        'Zxing\\Qrcode\\Detector\\FinderPatternInfo' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/Qrcode/Detector/FinderPatternInfo.php',
        'Zxing\\Qrcode\\QRCodeReader' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/Qrcode/QRCodeReader.php',
        'Zxing\\RGBLuminanceSource' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/RGBLuminanceSource.php',
        'Zxing\\Reader' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/Reader.php',
        'Zxing\\ReaderException' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/ReaderException.php',
        'Zxing\\Result' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/Result.php',
        'Zxing\\ResultPoint' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/ResultPoint.php',
        'extend\\PHPExcel\\ExcelExport' => __DIR__ . '/../..' . '/extend/PHPExcel/ExcelExport.php',
        'extend\\imagick\\Imagick' => __DIR__ . '/../..' . '/extend/imagick/Imagick.php',
        'piaowa\\core\\Config' => __DIR__ . '/../..' . '/piaowa/core/Config.php',
        'piaowa\\core\\Logger' => __DIR__ . '/../..' . '/piaowa/core/Logger.php',
        'piaowa\\core\\Piaowa' => __DIR__ . '/../..' . '/piaowa/core/Piaowa.php',
        'piaowa\\core\\Router' => __DIR__ . '/../..' . '/piaowa/core/Router.php',
        'piaowa\\lib\\Controller' => __DIR__ . '/../..' . '/piaowa/lib/Controller.php',
        'piaowa\\lib\\Database' => __DIR__ . '/../..' . '/piaowa/lib/Database.php',
        'piaowa\\lib\\RedisCli' => __DIR__ . '/../..' . '/piaowa/lib/RedisCli.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4d02789f4b5188484f73385ba35e864a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4d02789f4b5188484f73385ba35e864a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4d02789f4b5188484f73385ba35e864a::$classMap;

        }, null, ClassLoader::class);
    }
}
