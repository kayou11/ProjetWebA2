<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_f4297d70f232fb61792afe5c2064361cab8bef457eb4ae3f60e9d9c7410b371f extends Twig_Template
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
        // line 1
        echo json_encode(array("error" => array("code" => ($context["status_code"] ?? null), "message" => ($context["status_text"] ?? null), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), ($context["exception"] ?? null), "toarray", array()))));
        echo "
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "TwigBundle:Exception:exception.json.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
