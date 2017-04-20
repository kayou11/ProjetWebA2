<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_11cb17c3dbbe07cf03dfa737d92c55358e6e5c9f29fb0a82be590e6e0573a51a extends Twig_Template
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
        $__internal_ab8a29b8c4d5bf27bf76e8fc9e57b16ba1879844af2aeb4ff499178f0e4878a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab8a29b8c4d5bf27bf76e8fc9e57b16ba1879844af2aeb4ff499178f0e4878a5->enter($__internal_ab8a29b8c4d5bf27bf76e8fc9e57b16ba1879844af2aeb4ff499178f0e4878a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_288ecb34af134897f233ec433866261108e1d7425fb2fc069883136048348c1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_288ecb34af134897f233ec433866261108e1d7425fb2fc069883136048348c1a->enter($__internal_288ecb34af134897f233ec433866261108e1d7425fb2fc069883136048348c1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_ab8a29b8c4d5bf27bf76e8fc9e57b16ba1879844af2aeb4ff499178f0e4878a5->leave($__internal_ab8a29b8c4d5bf27bf76e8fc9e57b16ba1879844af2aeb4ff499178f0e4878a5_prof);

        
        $__internal_288ecb34af134897f233ec433866261108e1d7425fb2fc069883136048348c1a->leave($__internal_288ecb34af134897f233ec433866261108e1d7425fb2fc069883136048348c1a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
