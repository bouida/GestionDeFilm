<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_85eb7ae168a63eb547fc7d43d3d0055a00abb86cc9395282ea7c741fbd21c95a extends Twig_Template
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
        $__internal_49a2d395fe1bede77b7fa17a116f998cd6d771129e530bd6ca4de3a0a7224073 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49a2d395fe1bede77b7fa17a116f998cd6d771129e530bd6ca4de3a0a7224073->enter($__internal_49a2d395fe1bede77b7fa17a116f998cd6d771129e530bd6ca4de3a0a7224073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_49a2d395fe1bede77b7fa17a116f998cd6d771129e530bd6ca4de3a0a7224073->leave($__internal_49a2d395fe1bede77b7fa17a116f998cd6d771129e530bd6ca4de3a0a7224073_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "C:\\wamp\\www\\GestionDeFilm\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}