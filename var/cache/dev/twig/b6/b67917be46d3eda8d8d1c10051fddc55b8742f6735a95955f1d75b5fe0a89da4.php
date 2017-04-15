<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_9ad16ffbfa7a7189a66f784bf9c2fa99bec6ad536754ad6c0e4286c79e07d1d6 extends Twig_Template
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
        $__internal_c45d46ab56b7e7710278f741a288a9d218c537405e7569acfa330e895fd4c7b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c45d46ab56b7e7710278f741a288a9d218c537405e7569acfa330e895fd4c7b4->enter($__internal_c45d46ab56b7e7710278f741a288a9d218c537405e7569acfa330e895fd4c7b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_7de4f832cec4dfc9cda683a6886bab69c1df1a7da1593de126ca952bf27e3c30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7de4f832cec4dfc9cda683a6886bab69c1df1a7da1593de126ca952bf27e3c30->enter($__internal_7de4f832cec4dfc9cda683a6886bab69c1df1a7da1593de126ca952bf27e3c30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_c45d46ab56b7e7710278f741a288a9d218c537405e7569acfa330e895fd4c7b4->leave($__internal_c45d46ab56b7e7710278f741a288a9d218c537405e7569acfa330e895fd4c7b4_prof);

        
        $__internal_7de4f832cec4dfc9cda683a6886bab69c1df1a7da1593de126ca952bf27e3c30->leave($__internal_7de4f832cec4dfc9cda683a6886bab69c1df1a7da1593de126ca952bf27e3c30_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
