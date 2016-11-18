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
        $__internal_c951ee43eb142f64c89a1138b4c3cfec2386a7efbe9bc0da55e008ef69de7beb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c951ee43eb142f64c89a1138b4c3cfec2386a7efbe9bc0da55e008ef69de7beb->enter($__internal_c951ee43eb142f64c89a1138b4c3cfec2386a7efbe9bc0da55e008ef69de7beb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_c951ee43eb142f64c89a1138b4c3cfec2386a7efbe9bc0da55e008ef69de7beb->leave($__internal_c951ee43eb142f64c89a1138b4c3cfec2386a7efbe9bc0da55e008ef69de7beb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_fb4a778353b42df3a38441d65cb3113430e172a31df685ddf8414558b2184e46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb4a778353b42df3a38441d65cb3113430e172a31df685ddf8414558b2184e46->enter($__internal_fb4a778353b42df3a38441d65cb3113430e172a31df685ddf8414558b2184e46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_fb4a778353b42df3a38441d65cb3113430e172a31df685ddf8414558b2184e46->leave($__internal_fb4a778353b42df3a38441d65cb3113430e172a31df685ddf8414558b2184e46_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e23329170ecd64d0645b13523f9895101caa7fb01084cdc41b3313b0843c461a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e23329170ecd64d0645b13523f9895101caa7fb01084cdc41b3313b0843c461a->enter($__internal_e23329170ecd64d0645b13523f9895101caa7fb01084cdc41b3313b0843c461a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e23329170ecd64d0645b13523f9895101caa7fb01084cdc41b3313b0843c461a->leave($__internal_e23329170ecd64d0645b13523f9895101caa7fb01084cdc41b3313b0843c461a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c3e92cf0bc100a6edf4af934b08a1fbda902ab2c719d7095f71989e4fd9bb401 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3e92cf0bc100a6edf4af934b08a1fbda902ab2c719d7095f71989e4fd9bb401->enter($__internal_c3e92cf0bc100a6edf4af934b08a1fbda902ab2c719d7095f71989e4fd9bb401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c3e92cf0bc100a6edf4af934b08a1fbda902ab2c719d7095f71989e4fd9bb401->leave($__internal_c3e92cf0bc100a6edf4af934b08a1fbda902ab2c719d7095f71989e4fd9bb401_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f5bfcdffe0b3a2c2453273d6ac5ccefff7b4e720b66aa879d71a1bf47c6207b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5bfcdffe0b3a2c2453273d6ac5ccefff7b4e720b66aa879d71a1bf47c6207b2->enter($__internal_f5bfcdffe0b3a2c2453273d6ac5ccefff7b4e720b66aa879d71a1bf47c6207b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f5bfcdffe0b3a2c2453273d6ac5ccefff7b4e720b66aa879d71a1bf47c6207b2->leave($__internal_f5bfcdffe0b3a2c2453273d6ac5ccefff7b4e720b66aa879d71a1bf47c6207b2_prof);

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
