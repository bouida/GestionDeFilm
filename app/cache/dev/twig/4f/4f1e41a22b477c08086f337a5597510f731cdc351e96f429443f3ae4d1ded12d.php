<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_9360bd322c03fb3e46368d3202bb0842af97b9f183769a8c587409f967a696a7 extends Twig_Template
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
        $__internal_4d9c71a3eee318f5ab943fa1cd1f87255c523af3e02bdf6ab8e9c6a38c7ab430 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d9c71a3eee318f5ab943fa1cd1f87255c523af3e02bdf6ab8e9c6a38c7ab430->enter($__internal_4d9c71a3eee318f5ab943fa1cd1f87255c523af3e02bdf6ab8e9c6a38c7ab430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_4d9c71a3eee318f5ab943fa1cd1f87255c523af3e02bdf6ab8e9c6a38c7ab430->leave($__internal_4d9c71a3eee318f5ab943fa1cd1f87255c523af3e02bdf6ab8e9c6a38c7ab430_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "C:\\wamp\\www\\GestionDeFilm\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
