<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_5b51a63eab3c988e410dd8b174d8195850e466d4a10c68f1bef62e763ab5a0db extends Twig_Template
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
        $__internal_8c8341c604597c9a189f18bdcda183eea23ba444fdd436567dd035005b35c8b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c8341c604597c9a189f18bdcda183eea23ba444fdd436567dd035005b35c8b2->enter($__internal_8c8341c604597c9a189f18bdcda183eea23ba444fdd436567dd035005b35c8b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_8bcfec8b26a6b1094d507189934f6286c748facb3dd658442afd5bef9a466edb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bcfec8b26a6b1094d507189934f6286c748facb3dd658442afd5bef9a466edb->enter($__internal_8bcfec8b26a6b1094d507189934f6286c748facb3dd658442afd5bef9a466edb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_8c8341c604597c9a189f18bdcda183eea23ba444fdd436567dd035005b35c8b2->leave($__internal_8c8341c604597c9a189f18bdcda183eea23ba444fdd436567dd035005b35c8b2_prof);

        
        $__internal_8bcfec8b26a6b1094d507189934f6286c748facb3dd658442afd5bef9a466edb->leave($__internal_8bcfec8b26a6b1094d507189934f6286c748facb3dd658442afd5bef9a466edb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
