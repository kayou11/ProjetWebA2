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
        $__internal_7844509d9b86219c4bdcb294f7309bd6c2e2d5dd6b772b8efd02a825bb97f23c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7844509d9b86219c4bdcb294f7309bd6c2e2d5dd6b772b8efd02a825bb97f23c->enter($__internal_7844509d9b86219c4bdcb294f7309bd6c2e2d5dd6b772b8efd02a825bb97f23c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_a7cc3b940723147ccb3e1e97a57caa2f4f6028892969b4636ef0f1228f452996 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7cc3b940723147ccb3e1e97a57caa2f4f6028892969b4636ef0f1228f452996->enter($__internal_a7cc3b940723147ccb3e1e97a57caa2f4f6028892969b4636ef0f1228f452996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_7844509d9b86219c4bdcb294f7309bd6c2e2d5dd6b772b8efd02a825bb97f23c->leave($__internal_7844509d9b86219c4bdcb294f7309bd6c2e2d5dd6b772b8efd02a825bb97f23c_prof);

        
        $__internal_a7cc3b940723147ccb3e1e97a57caa2f4f6028892969b4636ef0f1228f452996->leave($__internal_a7cc3b940723147ccb3e1e97a57caa2f4f6028892969b4636ef0f1228f452996_prof);

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
