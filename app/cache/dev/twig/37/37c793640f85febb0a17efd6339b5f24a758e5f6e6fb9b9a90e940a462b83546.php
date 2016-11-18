<?php

/* SensioDistributionBundle:Configurator:form.html.twig */
class __TwigTemplate_92eb7cde0a9d75048ae94121cbb8838cd10b3d542193b5798546e6389319b5cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "SensioDistributionBundle:Configurator:form.html.twig", 1);
        $this->blocks = array(
            'form_rows' => array($this, 'block_form_rows'),
            'form_row' => array($this, 'block_form_row'),
            'form_label' => array($this, 'block_form_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d687e52ffdd6e20393c9cf0065577667f25fdfbb90b9893e863efbe18d9eb3f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d687e52ffdd6e20393c9cf0065577667f25fdfbb90b9893e863efbe18d9eb3f8->enter($__internal_d687e52ffdd6e20393c9cf0065577667f25fdfbb90b9893e863efbe18d9eb3f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle:Configurator:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d687e52ffdd6e20393c9cf0065577667f25fdfbb90b9893e863efbe18d9eb3f8->leave($__internal_d687e52ffdd6e20393c9cf0065577667f25fdfbb90b9893e863efbe18d9eb3f8_prof);

    }

    // line 3
    public function block_form_rows($context, array $blocks = array())
    {
        $__internal_905844d5f7178d3f349c3cb2927e2db6d98f6e95ad2495b10d9b0ea8097ca8e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_905844d5f7178d3f349c3cb2927e2db6d98f6e95ad2495b10d9b0ea8097ca8e9->enter($__internal_905844d5f7178d3f349c3cb2927e2db6d98f6e95ad2495b10d9b0ea8097ca8e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        // line 4
        echo "    <div class=\"symfony-form-errors\">
        ";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    </div>
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 8
            echo "        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row');
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_905844d5f7178d3f349c3cb2927e2db6d98f6e95ad2495b10d9b0ea8097ca8e9->leave($__internal_905844d5f7178d3f349c3cb2927e2db6d98f6e95ad2495b10d9b0ea8097ca8e9_prof);

    }

    // line 12
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_08a48a0635c8b3f0109daee6aa1a9c91686f526a116bc52711b7835a1ed801d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08a48a0635c8b3f0109daee6aa1a9c91686f526a116bc52711b7835a1ed801d1->enter($__internal_08a48a0635c8b3f0109daee6aa1a9c91686f526a116bc52711b7835a1ed801d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 13
        echo "    <div class=\"symfony-form-row\">
        ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        echo "
        <div class=\"symfony-form-field\">
            ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            <div class=\"symfony-form-errors\">
                ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_08a48a0635c8b3f0109daee6aa1a9c91686f526a116bc52711b7835a1ed801d1->leave($__internal_08a48a0635c8b3f0109daee6aa1a9c91686f526a116bc52711b7835a1ed801d1_prof);

    }

    // line 24
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_fee493f2c2f08f932cded1954c0de902d5854d3696555ac5c6d0434a73f7955b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fee493f2c2f08f932cded1954c0de902d5854d3696555ac5c6d0434a73f7955b->enter($__internal_fee493f2c2f08f932cded1954c0de902d5854d3696555ac5c6d0434a73f7955b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 25
        echo "    ";
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
            // line 26
            echo "        ";
            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
            // line 27
            echo "    ";
        }
        // line 28
        echo "    <label for=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\">
        ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))), "html", null, true);
        echo "
        ";
        // line 30
        if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
            // line 31
            echo "            <span class=\"symfony-form-required\" title=\"This field is required\">*</span>
        ";
        }
        // line 33
        echo "    </label>
";
        
        $__internal_fee493f2c2f08f932cded1954c0de902d5854d3696555ac5c6d0434a73f7955b->leave($__internal_fee493f2c2f08f932cded1954c0de902d5854d3696555ac5c6d0434a73f7955b_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 33,  125 => 31,  123 => 30,  119 => 29,  114 => 28,  111 => 27,  108 => 26,  105 => 25,  99 => 24,  87 => 18,  82 => 16,  77 => 14,  74 => 13,  68 => 12,  54 => 8,  50 => 7,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"form_div_layout.html.twig\" %}

{% block form_rows %}
    <div class=\"symfony-form-errors\">
        {{ form_errors(form) }}
    </div>
    {% for child in form %}
        {{ form_row(child) }}
    {% endfor %}
{% endblock %}

{% block form_row %}
    <div class=\"symfony-form-row\">
        {{ form_label(form) }}
        <div class=\"symfony-form-field\">
            {{ form_widget(form) }}
            <div class=\"symfony-form-errors\">
                {{ form_errors(form) }}
            </div>
        </div>
    </div>
{% endblock %}

{% block form_label %}
    {% if label is empty %}
        {% set label = name|humanize %}
    {% endif %}
    <label for=\"{{ id }}\">
        {{ label|trans }}
        {% if required %}
            <span class=\"symfony-form-required\" title=\"This field is required\">*</span>
        {% endif %}
    </label>
{% endblock %}
", "SensioDistributionBundle:Configurator:form.html.twig", "C:\\wamp\\www\\GestionDeFilm\\vendor\\sensio\\distribution-bundle\\Sensio\\Bundle\\DistributionBundle/Resources/views/Configurator/form.html.twig");
    }
}
