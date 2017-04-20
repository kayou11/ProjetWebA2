<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_b7d57d9652fd84cc71f97dbabc790607c8c4d373583aca2747939596178a16fb extends Twig_Template
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
        $__internal_fbedfe909e01492e0c7cb6c3ce77ad9e8672feb707e11091a0b825e16ae6ea2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbedfe909e01492e0c7cb6c3ce77ad9e8672feb707e11091a0b825e16ae6ea2e->enter($__internal_fbedfe909e01492e0c7cb6c3ce77ad9e8672feb707e11091a0b825e16ae6ea2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_86f744be08e684d5c89b20830ae7d31143fec892658c7ee42e6d21f642accbae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86f744be08e684d5c89b20830ae7d31143fec892658c7ee42e6d21f642accbae->enter($__internal_86f744be08e684d5c89b20830ae7d31143fec892658c7ee42e6d21f642accbae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_fbedfe909e01492e0c7cb6c3ce77ad9e8672feb707e11091a0b825e16ae6ea2e->leave($__internal_fbedfe909e01492e0c7cb6c3ce77ad9e8672feb707e11091a0b825e16ae6ea2e_prof);

        
        $__internal_86f744be08e684d5c89b20830ae7d31143fec892658c7ee42e6d21f642accbae->leave($__internal_86f744be08e684d5c89b20830ae7d31143fec892658c7ee42e6d21f642accbae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
