<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_778af4653994879445c8e722b33e8178f2910936313a35e06904d3a554f3b9e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4363ba683aceb22c4cb7fb0efd8d5433389568ffd3674b9c8f664ec9527ce3f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4363ba683aceb22c4cb7fb0efd8d5433389568ffd3674b9c8f664ec9527ce3f5->enter($__internal_4363ba683aceb22c4cb7fb0efd8d5433389568ffd3674b9c8f664ec9527ce3f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_f4f729099778f890d29031614b46c814ee6dec2705e38531d4103a57899436fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4f729099778f890d29031614b46c814ee6dec2705e38531d4103a57899436fd->enter($__internal_f4f729099778f890d29031614b46c814ee6dec2705e38531d4103a57899436fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4363ba683aceb22c4cb7fb0efd8d5433389568ffd3674b9c8f664ec9527ce3f5->leave($__internal_4363ba683aceb22c4cb7fb0efd8d5433389568ffd3674b9c8f664ec9527ce3f5_prof);

        
        $__internal_f4f729099778f890d29031614b46c814ee6dec2705e38531d4103a57899436fd->leave($__internal_f4f729099778f890d29031614b46c814ee6dec2705e38531d4103a57899436fd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5b2b676e91a8335612d803ee44ebf9f753ea1c56c4eba7ca69836b465540f450 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b2b676e91a8335612d803ee44ebf9f753ea1c56c4eba7ca69836b465540f450->enter($__internal_5b2b676e91a8335612d803ee44ebf9f753ea1c56c4eba7ca69836b465540f450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2be7c9903697022e982cccf25d823c6befab33ea2f34b6e33e34dc938c2eee81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2be7c9903697022e982cccf25d823c6befab33ea2f34b6e33e34dc938c2eee81->enter($__internal_2be7c9903697022e982cccf25d823c6befab33ea2f34b6e33e34dc938c2eee81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_2be7c9903697022e982cccf25d823c6befab33ea2f34b6e33e34dc938c2eee81->leave($__internal_2be7c9903697022e982cccf25d823c6befab33ea2f34b6e33e34dc938c2eee81_prof);

        
        $__internal_5b2b676e91a8335612d803ee44ebf9f753ea1c56c4eba7ca69836b465540f450->leave($__internal_5b2b676e91a8335612d803ee44ebf9f753ea1c56c4eba7ca69836b465540f450_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
