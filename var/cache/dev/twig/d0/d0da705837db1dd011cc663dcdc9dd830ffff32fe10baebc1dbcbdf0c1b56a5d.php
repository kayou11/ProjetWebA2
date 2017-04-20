<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_bb265f0a87a9fe573b8ac2e526f7c1fe7ae9a3d15641d943b61d3140b7dcf6db extends Twig_Template
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
        $__internal_07931538bd4b4cb278b451449ad66caa60ca8e953360ebc1cebfe65758a36cf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07931538bd4b4cb278b451449ad66caa60ca8e953360ebc1cebfe65758a36cf0->enter($__internal_07931538bd4b4cb278b451449ad66caa60ca8e953360ebc1cebfe65758a36cf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_29d295d5038bf6961cbc5c5dccf4861f1ce4d1ef9f41d58f643fcbaee39710cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29d295d5038bf6961cbc5c5dccf4861f1ce4d1ef9f41d58f643fcbaee39710cd->enter($__internal_29d295d5038bf6961cbc5c5dccf4861f1ce4d1ef9f41d58f643fcbaee39710cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\" <?php endif ?>
<?php foreach (\$attr as \$k => \$v): ?>
<?php if (in_array(\$k, array('placeholder', 'title'), true)): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_07931538bd4b4cb278b451449ad66caa60ca8e953360ebc1cebfe65758a36cf0->leave($__internal_07931538bd4b4cb278b451449ad66caa60ca8e953360ebc1cebfe65758a36cf0_prof);

        
        $__internal_29d295d5038bf6961cbc5c5dccf4861f1ce4d1ef9f41d58f643fcbaee39710cd->leave($__internal_29d295d5038bf6961cbc5c5dccf4861f1ce4d1ef9f41d58f643fcbaee39710cd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\" <?php endif ?>
<?php foreach (\$attr as \$k => \$v): ?>
<?php if (in_array(\$k, array('placeholder', 'title'), true)): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/widget_container_attributes.html.php", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
