<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_0ed18ed4853aade7fa94034842e2d045c20ce1c2c0c17a37bb129f130f28736a extends Twig_Template
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
        $__internal_d7ab7fa1dd2f7bf0bcd044b7ba2e762042b2b96d97262a52f5c169c3254f4b5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7ab7fa1dd2f7bf0bcd044b7ba2e762042b2b96d97262a52f5c169c3254f4b5f->enter($__internal_d7ab7fa1dd2f7bf0bcd044b7ba2e762042b2b96d97262a52f5c169c3254f4b5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_d7ab7fa1dd2f7bf0bcd044b7ba2e762042b2b96d97262a52f5c169c3254f4b5f->leave($__internal_d7ab7fa1dd2f7bf0bcd044b7ba2e762042b2b96d97262a52f5c169c3254f4b5f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
        return new Twig_Source("{% include 'TwigBundle:Exception:exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.atom.twig", "C:\\wamp\\www\\GestionDeFilm\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
