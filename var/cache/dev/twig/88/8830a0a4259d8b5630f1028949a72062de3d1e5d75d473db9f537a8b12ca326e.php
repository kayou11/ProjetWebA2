<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_a574390c09cef71638146c9ae42b001dd5f76dbbf17e7031ad766e1f7b4e087e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9dd615c09cf27fc98a9a94d94912fb184ea3155c8d45581c49ac0069b54c7a5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9dd615c09cf27fc98a9a94d94912fb184ea3155c8d45581c49ac0069b54c7a5d->enter($__internal_9dd615c09cf27fc98a9a94d94912fb184ea3155c8d45581c49ac0069b54c7a5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_8d5b9c60065dbd86cdf215883484cd065397024563e8f6d6414effccc2d1e267 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d5b9c60065dbd86cdf215883484cd065397024563e8f6d6414effccc2d1e267->enter($__internal_8d5b9c60065dbd86cdf215883484cd065397024563e8f6d6414effccc2d1e267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_9dd615c09cf27fc98a9a94d94912fb184ea3155c8d45581c49ac0069b54c7a5d->leave($__internal_9dd615c09cf27fc98a9a94d94912fb184ea3155c8d45581c49ac0069b54c7a5d_prof);

        
        $__internal_8d5b9c60065dbd86cdf215883484cd065397024563e8f6d6414effccc2d1e267->leave($__internal_8d5b9c60065dbd86cdf215883484cd065397024563e8f6d6414effccc2d1e267_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
