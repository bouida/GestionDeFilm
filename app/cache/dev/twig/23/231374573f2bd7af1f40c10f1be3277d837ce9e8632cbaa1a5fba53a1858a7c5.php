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
        $__internal_6e2d91f784bb313a13aefb8a42895caee8933d2effb2e46d1f8b008c3dc7d4fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e2d91f784bb313a13aefb8a42895caee8933d2effb2e46d1f8b008c3dc7d4fd->enter($__internal_6e2d91f784bb313a13aefb8a42895caee8933d2effb2e46d1f8b008c3dc7d4fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_6e2d91f784bb313a13aefb8a42895caee8933d2effb2e46d1f8b008c3dc7d4fd->leave($__internal_6e2d91f784bb313a13aefb8a42895caee8933d2effb2e46d1f8b008c3dc7d4fd_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_4d123fdf915dfed1f8f4cf19e4e1b8585702c21331d64c2e108f93f8455b1820 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d123fdf915dfed1f8f4cf19e4e1b8585702c21331d64c2e108f93f8455b1820->enter($__internal_4d123fdf915dfed1f8f4cf19e4e1b8585702c21331d64c2e108f93f8455b1820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_4d123fdf915dfed1f8f4cf19e4e1b8585702c21331d64c2e108f93f8455b1820->leave($__internal_4d123fdf915dfed1f8f4cf19e4e1b8585702c21331d64c2e108f93f8455b1820_prof);

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
