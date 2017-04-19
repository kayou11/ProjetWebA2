<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_b22c78b33e4130cea8f1cc83a86b12702dafbb39948200f51f9a0297db0a427b extends Twig_Template
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
        $__internal_3da84276fd78833af79418f015acc5b2fea00f0e81f43eb39ac3582adb84c458 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3da84276fd78833af79418f015acc5b2fea00f0e81f43eb39ac3582adb84c458->enter($__internal_3da84276fd78833af79418f015acc5b2fea00f0e81f43eb39ac3582adb84c458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_489c391017f50fb817d7f76089b9699a1696bbe25a8b677441921fb61fa814f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_489c391017f50fb817d7f76089b9699a1696bbe25a8b677441921fb61fa814f0->enter($__internal_489c391017f50fb817d7f76089b9699a1696bbe25a8b677441921fb61fa814f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_3da84276fd78833af79418f015acc5b2fea00f0e81f43eb39ac3582adb84c458->leave($__internal_3da84276fd78833af79418f015acc5b2fea00f0e81f43eb39ac3582adb84c458_prof);

        
        $__internal_489c391017f50fb817d7f76089b9699a1696bbe25a8b677441921fb61fa814f0->leave($__internal_489c391017f50fb817d7f76089b9699a1696bbe25a8b677441921fb61fa814f0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
