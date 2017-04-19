<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_e568adee109e9b1cbc735072030f6180361f4296f5fcf73870e83f7d56ea9c5b extends Twig_Template
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
        $__internal_57fc41dc1fe1cc8a34fbb85a1b8df98e4a8bbb2600546fdf1119dfc7b4fc726c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57fc41dc1fe1cc8a34fbb85a1b8df98e4a8bbb2600546fdf1119dfc7b4fc726c->enter($__internal_57fc41dc1fe1cc8a34fbb85a1b8df98e4a8bbb2600546fdf1119dfc7b4fc726c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_1b38b9ee58393669fd67788dc670f29beccec3ac78fd9e6aac9a022bcf8c0a1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b38b9ee58393669fd67788dc670f29beccec3ac78fd9e6aac9a022bcf8c0a1c->enter($__internal_1b38b9ee58393669fd67788dc670f29beccec3ac78fd9e6aac9a022bcf8c0a1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_57fc41dc1fe1cc8a34fbb85a1b8df98e4a8bbb2600546fdf1119dfc7b4fc726c->leave($__internal_57fc41dc1fe1cc8a34fbb85a1b8df98e4a8bbb2600546fdf1119dfc7b4fc726c_prof);

        
        $__internal_1b38b9ee58393669fd67788dc670f29beccec3ac78fd9e6aac9a022bcf8c0a1c->leave($__internal_1b38b9ee58393669fd67788dc670f29beccec3ac78fd9e6aac9a022bcf8c0a1c_prof);

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
