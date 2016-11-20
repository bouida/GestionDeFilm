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
        $__internal_3ab224bec91a2054aa6b2604b99b52c6c910adbbb8e96d1130c33b7d9815e762 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ab224bec91a2054aa6b2604b99b52c6c910adbbb8e96d1130c33b7d9815e762->enter($__internal_3ab224bec91a2054aa6b2604b99b52c6c910adbbb8e96d1130c33b7d9815e762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_3ab224bec91a2054aa6b2604b99b52c6c910adbbb8e96d1130c33b7d9815e762->leave($__internal_3ab224bec91a2054aa6b2604b99b52c6c910adbbb8e96d1130c33b7d9815e762_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_45f355a154e8cf1d5b0c01d6686e5116bc41a2d2e9d99df083ebd94718254688 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45f355a154e8cf1d5b0c01d6686e5116bc41a2d2e9d99df083ebd94718254688->enter($__internal_45f355a154e8cf1d5b0c01d6686e5116bc41a2d2e9d99df083ebd94718254688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_45f355a154e8cf1d5b0c01d6686e5116bc41a2d2e9d99df083ebd94718254688->leave($__internal_45f355a154e8cf1d5b0c01d6686e5116bc41a2d2e9d99df083ebd94718254688_prof);

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
