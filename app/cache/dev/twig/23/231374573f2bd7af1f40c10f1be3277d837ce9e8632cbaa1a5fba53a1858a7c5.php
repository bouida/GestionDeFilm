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
        $__internal_8d0f22ad3dc0b4c17b38b0323e2a6384693a36dc9c2ee8b05e4b802b4254d2d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d0f22ad3dc0b4c17b38b0323e2a6384693a36dc9c2ee8b05e4b802b4254d2d4->enter($__internal_8d0f22ad3dc0b4c17b38b0323e2a6384693a36dc9c2ee8b05e4b802b4254d2d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_8d0f22ad3dc0b4c17b38b0323e2a6384693a36dc9c2ee8b05e4b802b4254d2d4->leave($__internal_8d0f22ad3dc0b4c17b38b0323e2a6384693a36dc9c2ee8b05e4b802b4254d2d4_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_91f6dec8788677932066770daf3f1f82fd37a7f882b3d621ad38afdb04149afa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91f6dec8788677932066770daf3f1f82fd37a7f882b3d621ad38afdb04149afa->enter($__internal_91f6dec8788677932066770daf3f1f82fd37a7f882b3d621ad38afdb04149afa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_91f6dec8788677932066770daf3f1f82fd37a7f882b3d621ad38afdb04149afa->leave($__internal_91f6dec8788677932066770daf3f1f82fd37a7f882b3d621ad38afdb04149afa_prof);

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
