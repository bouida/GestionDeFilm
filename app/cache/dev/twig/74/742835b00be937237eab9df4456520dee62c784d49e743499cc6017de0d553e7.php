<?php

/* base.html.twig */
class __TwigTemplate_b2d01356c5ba4b2b0b9a4a7a401f3354b212bbbd59576610e8cdee6577a54282 extends Twig_Template
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
        $__internal_e6495aec02d70dfb39fcf4dea7b7b88637bc0cd18ccd72ec27d985dd75dde0ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6495aec02d70dfb39fcf4dea7b7b88637bc0cd18ccd72ec27d985dd75dde0ac->enter($__internal_e6495aec02d70dfb39fcf4dea7b7b88637bc0cd18ccd72ec27d985dd75dde0ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_e6495aec02d70dfb39fcf4dea7b7b88637bc0cd18ccd72ec27d985dd75dde0ac->leave($__internal_e6495aec02d70dfb39fcf4dea7b7b88637bc0cd18ccd72ec27d985dd75dde0ac_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_334134c7a8731eded2566052ec55e2639c8e07441bc1c99a22d8ad6b4986fdc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_334134c7a8731eded2566052ec55e2639c8e07441bc1c99a22d8ad6b4986fdc3->enter($__internal_334134c7a8731eded2566052ec55e2639c8e07441bc1c99a22d8ad6b4986fdc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_334134c7a8731eded2566052ec55e2639c8e07441bc1c99a22d8ad6b4986fdc3->leave($__internal_334134c7a8731eded2566052ec55e2639c8e07441bc1c99a22d8ad6b4986fdc3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a11d00e752322e68d9248348a4089fb75b59cfccb630857e529425169c129b57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a11d00e752322e68d9248348a4089fb75b59cfccb630857e529425169c129b57->enter($__internal_a11d00e752322e68d9248348a4089fb75b59cfccb630857e529425169c129b57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a11d00e752322e68d9248348a4089fb75b59cfccb630857e529425169c129b57->leave($__internal_a11d00e752322e68d9248348a4089fb75b59cfccb630857e529425169c129b57_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_49a347267e8e5686de1e5a92845b82f54240f4ff8c32fd63af7c0bc98845fc71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49a347267e8e5686de1e5a92845b82f54240f4ff8c32fd63af7c0bc98845fc71->enter($__internal_49a347267e8e5686de1e5a92845b82f54240f4ff8c32fd63af7c0bc98845fc71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_49a347267e8e5686de1e5a92845b82f54240f4ff8c32fd63af7c0bc98845fc71->leave($__internal_49a347267e8e5686de1e5a92845b82f54240f4ff8c32fd63af7c0bc98845fc71_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7be5dec16979b62412ea8f94064a2f8460032fd05d403647dbe6c8274ccd5c63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7be5dec16979b62412ea8f94064a2f8460032fd05d403647dbe6c8274ccd5c63->enter($__internal_7be5dec16979b62412ea8f94064a2f8460032fd05d403647dbe6c8274ccd5c63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7be5dec16979b62412ea8f94064a2f8460032fd05d403647dbe6c8274ccd5c63->leave($__internal_7be5dec16979b62412ea8f94064a2f8460032fd05d403647dbe6c8274ccd5c63_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
", "base.html.twig", "C:\\wamp\\www\\GestionDeFilm\\app\\Resources\\views\\base.html.twig");
    }
}
