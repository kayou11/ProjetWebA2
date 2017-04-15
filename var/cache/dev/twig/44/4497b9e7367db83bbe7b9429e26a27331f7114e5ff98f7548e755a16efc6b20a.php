<?php

/* SonataIntlBundle:CRUD:history_revision_timestamp.html.twig */
class __TwigTemplate_eaa30d6bd57f3cececc83436b12fe0cd40711929721a1ec53020527b0fe8b634 extends Twig_Template
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
        $__internal_b5989d438bce5aa67e3e376832f9fc780ea6abe5e199781ae8a945501f1d7ebd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5989d438bce5aa67e3e376832f9fc780ea6abe5e199781ae8a945501f1d7ebd->enter($__internal_b5989d438bce5aa67e3e376832f9fc780ea6abe5e199781ae8a945501f1d7ebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataIntlBundle:CRUD:history_revision_timestamp.html.twig"));

        $__internal_2058ec3ba705949d30b1023caef638b0877aaba9e439f442078f0c4efd25013c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2058ec3ba705949d30b1023caef638b0877aaba9e439f442078f0c4efd25013c->enter($__internal_2058ec3ba705949d30b1023caef638b0877aaba9e439f442078f0c4efd25013c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataIntlBundle:CRUD:history_revision_timestamp.html.twig"));

        // line 11
        echo "
";
        // line 12
        echo $this->env->getExtension('Sonata\IntlBundle\Twig\Extension\DateTimeExtension')->formatDatetime($this->getAttribute(($context["revision"] ?? $this->getContext($context, "revision")), "timestamp", array()));
        echo "
";
        
        $__internal_b5989d438bce5aa67e3e376832f9fc780ea6abe5e199781ae8a945501f1d7ebd->leave($__internal_b5989d438bce5aa67e3e376832f9fc780ea6abe5e199781ae8a945501f1d7ebd_prof);

        
        $__internal_2058ec3ba705949d30b1023caef638b0877aaba9e439f442078f0c4efd25013c->leave($__internal_2058ec3ba705949d30b1023caef638b0877aaba9e439f442078f0c4efd25013c_prof);

    }

    public function getTemplateName()
    {
        return "SonataIntlBundle:CRUD:history_revision_timestamp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 12,  25 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{{ revision.timestamp | format_datetime }}
", "SonataIntlBundle:CRUD:history_revision_timestamp.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sonata-project/intl-bundle/Resources/views/CRUD/history_revision_timestamp.html.twig");
    }
}
