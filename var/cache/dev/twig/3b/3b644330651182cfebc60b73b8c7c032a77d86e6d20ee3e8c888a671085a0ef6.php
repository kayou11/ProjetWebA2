<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_265358e13b994221832bbe76ab6806ed2a6f6c3def3e5fef2cfd94d79326a77a extends Twig_Template
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
        $__internal_3ff1a76f366c7c9e2bb89fc99c068481e7cf3c729bfb1fc2493cfb6d155c424b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ff1a76f366c7c9e2bb89fc99c068481e7cf3c729bfb1fc2493cfb6d155c424b->enter($__internal_3ff1a76f366c7c9e2bb89fc99c068481e7cf3c729bfb1fc2493cfb6d155c424b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_9cf7b209320e07ad1d1c49dc2961f5ac9548f93e8a4e8b5c3633bea248d99986 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cf7b209320e07ad1d1c49dc2961f5ac9548f93e8a4e8b5c3633bea248d99986->enter($__internal_9cf7b209320e07ad1d1c49dc2961f5ac9548f93e8a4e8b5c3633bea248d99986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_3ff1a76f366c7c9e2bb89fc99c068481e7cf3c729bfb1fc2493cfb6d155c424b->leave($__internal_3ff1a76f366c7c9e2bb89fc99c068481e7cf3c729bfb1fc2493cfb6d155c424b_prof);

        
        $__internal_9cf7b209320e07ad1d1c49dc2961f5ac9548f93e8a4e8b5c3633bea248d99986->leave($__internal_9cf7b209320e07ad1d1c49dc2961f5ac9548f93e8a4e8b5c3633bea248d99986_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
