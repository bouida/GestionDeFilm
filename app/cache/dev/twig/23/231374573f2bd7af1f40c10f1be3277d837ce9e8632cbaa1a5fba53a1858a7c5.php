<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_7d158947ca4c2f695d5dd7a94584ee3614a185533b8c9866e991456999722151 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ad3616e1bc2a40ffaebb52d7b22b80161fa3a1a2b000cd3bbc207397ae068f52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad3616e1bc2a40ffaebb52d7b22b80161fa3a1a2b000cd3bbc207397ae068f52->enter($__internal_ad3616e1bc2a40ffaebb52d7b22b80161fa3a1a2b000cd3bbc207397ae068f52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_ad3616e1bc2a40ffaebb52d7b22b80161fa3a1a2b000cd3bbc207397ae068f52->leave($__internal_ad3616e1bc2a40ffaebb52d7b22b80161fa3a1a2b000cd3bbc207397ae068f52_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_9df664f9f010c36d89b74ad0bff4052022deaf5cbf847aa65b5c448da58804f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9df664f9f010c36d89b74ad0bff4052022deaf5cbf847aa65b5c448da58804f5->enter($__internal_9df664f9f010c36d89b74ad0bff4052022deaf5cbf847aa65b5c448da58804f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_9df664f9f010c36d89b74ad0bff4052022deaf5cbf847aa65b5c448da58804f5->leave($__internal_9df664f9f010c36d89b74ad0bff4052022deaf5cbf847aa65b5c448da58804f5_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\wamp\\www\\GestionDeFilm\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
