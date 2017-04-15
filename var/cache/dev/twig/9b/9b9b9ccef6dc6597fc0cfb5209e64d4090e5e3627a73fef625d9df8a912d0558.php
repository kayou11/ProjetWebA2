<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_4cd3f7f98c2d126a0cf6ad26f45da95bb2476129f2e42e5a3f41acb244e33bea extends Twig_Template
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
        $__internal_61e4ae5963e9d9727766c7a804d309080de9bbd0a574934367fbe3a3943245f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61e4ae5963e9d9727766c7a804d309080de9bbd0a574934367fbe3a3943245f5->enter($__internal_61e4ae5963e9d9727766c7a804d309080de9bbd0a574934367fbe3a3943245f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_0083edb9b6ca33ba00032bbb54e243e470f9866c46078ff5892f5d249e5e291f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0083edb9b6ca33ba00032bbb54e243e470f9866c46078ff5892f5d249e5e291f->enter($__internal_0083edb9b6ca33ba00032bbb54e243e470f9866c46078ff5892f5d249e5e291f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_61e4ae5963e9d9727766c7a804d309080de9bbd0a574934367fbe3a3943245f5->leave($__internal_61e4ae5963e9d9727766c7a804d309080de9bbd0a574934367fbe3a3943245f5_prof);

        
        $__internal_0083edb9b6ca33ba00032bbb54e243e470f9866c46078ff5892f5d249e5e291f->leave($__internal_0083edb9b6ca33ba00032bbb54e243e470f9866c46078ff5892f5d249e5e291f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
