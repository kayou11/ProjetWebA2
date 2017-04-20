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
        $__internal_866f66f89530560eaa561be06215596eedf43acffeed054861f64466f88374d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_866f66f89530560eaa561be06215596eedf43acffeed054861f64466f88374d2->enter($__internal_866f66f89530560eaa561be06215596eedf43acffeed054861f64466f88374d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_55759f8da38b059627d3998e3476de5e88a3c95fd266db94f5e3c183ae2ba1e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55759f8da38b059627d3998e3476de5e88a3c95fd266db94f5e3c183ae2ba1e6->enter($__internal_55759f8da38b059627d3998e3476de5e88a3c95fd266db94f5e3c183ae2ba1e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_866f66f89530560eaa561be06215596eedf43acffeed054861f64466f88374d2->leave($__internal_866f66f89530560eaa561be06215596eedf43acffeed054861f64466f88374d2_prof);

        
        $__internal_55759f8da38b059627d3998e3476de5e88a3c95fd266db94f5e3c183ae2ba1e6->leave($__internal_55759f8da38b059627d3998e3476de5e88a3c95fd266db94f5e3c183ae2ba1e6_prof);

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
