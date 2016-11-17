<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_e4e5ee5de13c456ec00e8f789cb1fade6e22209b54fb2282fcde50c037831a8c extends Twig_Template
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
        $__internal_67476776f35dee49c48d7ada6a21aaf4f3b95d8119cc14bb9006c522d0a8aa1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67476776f35dee49c48d7ada6a21aaf4f3b95d8119cc14bb9006c522d0a8aa1c->enter($__internal_67476776f35dee49c48d7ada6a21aaf4f3b95d8119cc14bb9006c522d0a8aa1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_67476776f35dee49c48d7ada6a21aaf4f3b95d8119cc14bb9006c522d0a8aa1c->leave($__internal_67476776f35dee49c48d7ada6a21aaf4f3b95d8119cc14bb9006c522d0a8aa1c_prof);

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
