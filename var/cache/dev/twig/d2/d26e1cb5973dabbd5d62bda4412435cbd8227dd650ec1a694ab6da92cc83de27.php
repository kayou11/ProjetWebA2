<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_650a3b51b1b2231e0197ec5afd6a6102eec1e9fc5a6c53cd4f51b1db5db31953 extends Twig_Template
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
        $__internal_9008509df173437968c899f73771480481dde2d6c57d90f94e6ceb020f014f1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9008509df173437968c899f73771480481dde2d6c57d90f94e6ceb020f014f1a->enter($__internal_9008509df173437968c899f73771480481dde2d6c57d90f94e6ceb020f014f1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_eb5cdafe3fcbe779a91fb99d484a061ed407e24100de8fe325e1782122e0204b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb5cdafe3fcbe779a91fb99d484a061ed407e24100de8fe325e1782122e0204b->enter($__internal_eb5cdafe3fcbe779a91fb99d484a061ed407e24100de8fe325e1782122e0204b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_9008509df173437968c899f73771480481dde2d6c57d90f94e6ceb020f014f1a->leave($__internal_9008509df173437968c899f73771480481dde2d6c57d90f94e6ceb020f014f1a_prof);

        
        $__internal_eb5cdafe3fcbe779a91fb99d484a061ed407e24100de8fe325e1782122e0204b->leave($__internal_eb5cdafe3fcbe779a91fb99d484a061ed407e24100de8fe325e1782122e0204b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
", "@Framework/Form/form_errors.html.php", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
