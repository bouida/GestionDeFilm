<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_53a5bf2bc7c23001aa88cf32d18801456a1e5bb146e70f4724ffb03301c8da33 extends Twig_Template
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
        $__internal_89eaad8c6b832d42d273a98123bf72658cbe41d6edc3f0f3e2e65fac40ebd509 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89eaad8c6b832d42d273a98123bf72658cbe41d6edc3f0f3e2e65fac40ebd509->enter($__internal_89eaad8c6b832d42d273a98123bf72658cbe41d6edc3f0f3e2e65fac40ebd509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_89eaad8c6b832d42d273a98123bf72658cbe41d6edc3f0f3e2e65fac40ebd509->leave($__internal_89eaad8c6b832d42d273a98123bf72658cbe41d6edc3f0f3e2e65fac40ebd509_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{% include 'TwigBundle:Exception:error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "C:\\wamp\\www\\GestionDeFilm\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}