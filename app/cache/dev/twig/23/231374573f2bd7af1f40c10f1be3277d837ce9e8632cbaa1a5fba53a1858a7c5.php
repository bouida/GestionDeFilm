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
        $__internal_f925a17ebd994cd317e118c236b8187d0567491de522e547d9e64e1d0815e128 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f925a17ebd994cd317e118c236b8187d0567491de522e547d9e64e1d0815e128->enter($__internal_f925a17ebd994cd317e118c236b8187d0567491de522e547d9e64e1d0815e128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f925a17ebd994cd317e118c236b8187d0567491de522e547d9e64e1d0815e128->leave($__internal_f925a17ebd994cd317e118c236b8187d0567491de522e547d9e64e1d0815e128_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_9ae6d8b6756ecdb60f5eff51165ef1a7033ef06c29fd9dbcadc01a7d05a7e18f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ae6d8b6756ecdb60f5eff51165ef1a7033ef06c29fd9dbcadc01a7d05a7e18f->enter($__internal_9ae6d8b6756ecdb60f5eff51165ef1a7033ef06c29fd9dbcadc01a7d05a7e18f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_9ae6d8b6756ecdb60f5eff51165ef1a7033ef06c29fd9dbcadc01a7d05a7e18f->leave($__internal_9ae6d8b6756ecdb60f5eff51165ef1a7033ef06c29fd9dbcadc01a7d05a7e18f_prof);

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
