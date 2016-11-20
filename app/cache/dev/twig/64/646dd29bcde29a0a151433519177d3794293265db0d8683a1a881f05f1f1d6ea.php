<?php

/* ::base.html.twig */
class __TwigTemplate_00d081103bd2166006af923daf6f053112fc2ade6cee9f15420ce6750855dd1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e451413e559f5e10ef9d6122fce0b40deb1dd3c5681aa45be222152e2ca85856 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e451413e559f5e10ef9d6122fce0b40deb1dd3c5681aa45be222152e2ca85856->enter($__internal_e451413e559f5e10ef9d6122fce0b40deb1dd3c5681aa45be222152e2ca85856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_e451413e559f5e10ef9d6122fce0b40deb1dd3c5681aa45be222152e2ca85856->leave($__internal_e451413e559f5e10ef9d6122fce0b40deb1dd3c5681aa45be222152e2ca85856_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_83d2d599c99fd9f98b2b243304b32d6e8e4769ffee7ac7585d13d9faf5cd8d20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83d2d599c99fd9f98b2b243304b32d6e8e4769ffee7ac7585d13d9faf5cd8d20->enter($__internal_83d2d599c99fd9f98b2b243304b32d6e8e4769ffee7ac7585d13d9faf5cd8d20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_83d2d599c99fd9f98b2b243304b32d6e8e4769ffee7ac7585d13d9faf5cd8d20->leave($__internal_83d2d599c99fd9f98b2b243304b32d6e8e4769ffee7ac7585d13d9faf5cd8d20_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e9e2b6b0eb0318415bcaaafb766f59350a1ca1c8837e19fcf2277bb7ebea8a29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9e2b6b0eb0318415bcaaafb766f59350a1ca1c8837e19fcf2277bb7ebea8a29->enter($__internal_e9e2b6b0eb0318415bcaaafb766f59350a1ca1c8837e19fcf2277bb7ebea8a29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e9e2b6b0eb0318415bcaaafb766f59350a1ca1c8837e19fcf2277bb7ebea8a29->leave($__internal_e9e2b6b0eb0318415bcaaafb766f59350a1ca1c8837e19fcf2277bb7ebea8a29_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_8dd0d9a43bb20a65d1f823d6c68f44adf9806afe14fbeba40aed7aed738b58fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dd0d9a43bb20a65d1f823d6c68f44adf9806afe14fbeba40aed7aed738b58fc->enter($__internal_8dd0d9a43bb20a65d1f823d6c68f44adf9806afe14fbeba40aed7aed738b58fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8dd0d9a43bb20a65d1f823d6c68f44adf9806afe14fbeba40aed7aed738b58fc->leave($__internal_8dd0d9a43bb20a65d1f823d6c68f44adf9806afe14fbeba40aed7aed738b58fc_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4a12796ccd2fa4e4f58663bd7d15fb3aa26553586fc7bae9764f9f03b75b3151 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a12796ccd2fa4e4f58663bd7d15fb3aa26553586fc7bae9764f9f03b75b3151->enter($__internal_4a12796ccd2fa4e4f58663bd7d15fb3aa26553586fc7bae9764f9f03b75b3151_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4a12796ccd2fa4e4f58663bd7d15fb3aa26553586fc7bae9764f9f03b75b3151->leave($__internal_4a12796ccd2fa4e4f58663bd7d15fb3aa26553586fc7bae9764f9f03b75b3151_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "C:\\wamp\\www\\GestionDeFilm\\app/Resources\\views/base.html.twig");
    }
}
