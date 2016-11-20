<?php

/* SensioDistributionBundle:Configurator:final.html.twig */
class __TwigTemplate_c6d11a0c7b6ec334f68d318f8e34c0cfdce048dc8cdc2e1737405524cbeaa6e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig", "SensioDistributionBundle:Configurator:final.html.twig", 1);
        $this->blocks = array(
            'content_class' => array($this, 'block_content_class'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7417399a46f9d6b8fc9da600b5e7e5421f98686696d24ddbf8dd3d2cd25f2bde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7417399a46f9d6b8fc9da600b5e7e5421f98686696d24ddbf8dd3d2cd25f2bde->enter($__internal_7417399a46f9d6b8fc9da600b5e7e5421f98686696d24ddbf8dd3d2cd25f2bde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle:Configurator:final.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7417399a46f9d6b8fc9da600b5e7e5421f98686696d24ddbf8dd3d2cd25f2bde->leave($__internal_7417399a46f9d6b8fc9da600b5e7e5421f98686696d24ddbf8dd3d2cd25f2bde_prof);

    }

    // line 3
    public function block_content_class($context, array $blocks = array())
    {
        $__internal_90c2e83f2c9e82eb812aff92df749bc40a7c70a475626c524bf1d9090998b545 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90c2e83f2c9e82eb812aff92df749bc40a7c70a475626c524bf1d9090998b545->enter($__internal_90c2e83f2c9e82eb812aff92df749bc40a7c70a475626c524bf1d9090998b545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_class"));

        echo "config_done";
        
        $__internal_90c2e83f2c9e82eb812aff92df749bc40a7c70a475626c524bf1d9090998b545->leave($__internal_90c2e83f2c9e82eb812aff92df749bc40a7c70a475626c524bf1d9090998b545_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_8b9d4d6a41459944933dbb9be016aaa96139ef072deb2a51de9fa08157e8174a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b9d4d6a41459944933dbb9be016aaa96139ef072deb2a51de9fa08157e8174a->enter($__internal_8b9d4d6a41459944933dbb9be016aaa96139ef072deb2a51de9fa08157e8174a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "    <div class=\"step\">
        <h1>Well done!</h1>
        ";
        // line 7
        if ((isset($context["is_writable"]) ? $context["is_writable"] : $this->getContext($context, "is_writable"))) {
            // line 8
            echo "        <h2>Your distribution is configured!</h2>
        ";
        } else {
            // line 10
            echo "        <h2 class=\"configure-error\">Your distribution is almost configured but...</h2>
        ";
        }
        // line 12
        echo "        <h3>
            <span>
                ";
        // line 14
        if ((isset($context["is_writable"]) ? $context["is_writable"] : $this->getContext($context, "is_writable"))) {
            // line 15
            echo "                    Your parameters.yml file has been overwritten with these parameters (in <em>";
            echo twig_escape_filter($this->env, (isset($context["yml_path"]) ? $context["yml_path"] : $this->getContext($context, "yml_path")), "html", null, true);
            echo "</em>):
                ";
        } else {
            // line 17
            echo "                    Your parameters.yml file is not writeable! Here are the parameters you can copy and paste in <em>";
            echo twig_escape_filter($this->env, (isset($context["yml_path"]) ? $context["yml_path"] : $this->getContext($context, "yml_path")), "html", null, true);
            echo "</em>:
                ";
        }
        // line 19
        echo "            </span>
        </h3>

        <textarea class=\"symfony-configuration\">";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "html", null, true);
        echo "</textarea>

        ";
        // line 24
        if ((isset($context["welcome_url"]) ? $context["welcome_url"] : $this->getContext($context, "welcome_url"))) {
            // line 25
            echo "            <ul>
                <li><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, (isset($context["welcome_url"]) ? $context["welcome_url"] : $this->getContext($context, "welcome_url")), "html", null, true);
            echo "\">Go to the Welcome page</a></li>
            </ul>
        ";
        }
        // line 29
        echo "    </div>
";
        
        $__internal_8b9d4d6a41459944933dbb9be016aaa96139ef072deb2a51de9fa08157e8174a->leave($__internal_8b9d4d6a41459944933dbb9be016aaa96139ef072deb2a51de9fa08157e8174a_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:final.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 29,  100 => 26,  97 => 25,  95 => 24,  90 => 22,  85 => 19,  79 => 17,  73 => 15,  71 => 14,  67 => 12,  63 => 10,  59 => 8,  57 => 7,  53 => 5,  47 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"SensioDistributionBundle::Configurator/layout.html.twig\" %}

{% block content_class %}config_done{% endblock %}
{% block content %}
    <div class=\"step\">
        <h1>Well done!</h1>
        {% if is_writable %}
        <h2>Your distribution is configured!</h2>
        {% else %}
        <h2 class=\"configure-error\">Your distribution is almost configured but...</h2>
        {% endif %}
        <h3>
            <span>
                {% if is_writable %}
                    Your parameters.yml file has been overwritten with these parameters (in <em>{{ yml_path }}</em>):
                {% else %}
                    Your parameters.yml file is not writeable! Here are the parameters you can copy and paste in <em>{{ yml_path }}</em>:
                {% endif %}
            </span>
        </h3>

        <textarea class=\"symfony-configuration\">{{ parameters }}</textarea>

        {% if welcome_url %}
            <ul>
                <li><a href=\"{{ welcome_url }}\">Go to the Welcome page</a></li>
            </ul>
        {% endif %}
    </div>
{% endblock %}
", "SensioDistributionBundle:Configurator:final.html.twig", "C:\\wamp\\www\\GestionDeFilm\\vendor\\sensio\\distribution-bundle\\Sensio\\Bundle\\DistributionBundle/Resources/views/Configurator/final.html.twig");
    }
}
