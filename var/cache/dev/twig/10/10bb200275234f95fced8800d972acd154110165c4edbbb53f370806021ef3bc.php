<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_22e45404f785aa11aba524d66b3c9a341fc7ff553eb635c7937da75f06c70fbd extends Twig_Template
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
        $__internal_32261896a11757fcb62e776927a78afff4798b400926a064953b182df569761c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32261896a11757fcb62e776927a78afff4798b400926a064953b182df569761c->enter($__internal_32261896a11757fcb62e776927a78afff4798b400926a064953b182df569761c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_869b55763802d6e8124e97f6b450c2bfd4ea71eaca3088db978433c0f74ab407 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_869b55763802d6e8124e97f6b450c2bfd4ea71eaca3088db978433c0f74ab407->enter($__internal_869b55763802d6e8124e97f6b450c2bfd4ea71eaca3088db978433c0f74ab407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_32261896a11757fcb62e776927a78afff4798b400926a064953b182df569761c->leave($__internal_32261896a11757fcb62e776927a78afff4798b400926a064953b182df569761c_prof);

        
        $__internal_869b55763802d6e8124e97f6b450c2bfd4ea71eaca3088db978433c0f74ab407->leave($__internal_869b55763802d6e8124e97f6b450c2bfd4ea71eaca3088db978433c0f74ab407_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
