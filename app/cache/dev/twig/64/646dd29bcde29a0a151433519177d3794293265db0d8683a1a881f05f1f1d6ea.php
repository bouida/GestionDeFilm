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
        $__internal_29d1daee186b7f6005c7be429875bde95bc9e7e4f836e3f068493be3bfd4aa4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29d1daee186b7f6005c7be429875bde95bc9e7e4f836e3f068493be3bfd4aa4c->enter($__internal_29d1daee186b7f6005c7be429875bde95bc9e7e4f836e3f068493be3bfd4aa4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_29d1daee186b7f6005c7be429875bde95bc9e7e4f836e3f068493be3bfd4aa4c->leave($__internal_29d1daee186b7f6005c7be429875bde95bc9e7e4f836e3f068493be3bfd4aa4c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b04d4791bad5bd29af3815ab6d0aa19b5c7a190850dfe3d168df2035dd90f3f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b04d4791bad5bd29af3815ab6d0aa19b5c7a190850dfe3d168df2035dd90f3f4->enter($__internal_b04d4791bad5bd29af3815ab6d0aa19b5c7a190850dfe3d168df2035dd90f3f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b04d4791bad5bd29af3815ab6d0aa19b5c7a190850dfe3d168df2035dd90f3f4->leave($__internal_b04d4791bad5bd29af3815ab6d0aa19b5c7a190850dfe3d168df2035dd90f3f4_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3f6455856fc21b79df2942f86dd50d001bc12fec394b6e2cf861a08dbce34f30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f6455856fc21b79df2942f86dd50d001bc12fec394b6e2cf861a08dbce34f30->enter($__internal_3f6455856fc21b79df2942f86dd50d001bc12fec394b6e2cf861a08dbce34f30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3f6455856fc21b79df2942f86dd50d001bc12fec394b6e2cf861a08dbce34f30->leave($__internal_3f6455856fc21b79df2942f86dd50d001bc12fec394b6e2cf861a08dbce34f30_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_52649b7114fa924ad292f1c0a8d9107fb3e14f705121b50026fed202dc7657fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52649b7114fa924ad292f1c0a8d9107fb3e14f705121b50026fed202dc7657fc->enter($__internal_52649b7114fa924ad292f1c0a8d9107fb3e14f705121b50026fed202dc7657fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_52649b7114fa924ad292f1c0a8d9107fb3e14f705121b50026fed202dc7657fc->leave($__internal_52649b7114fa924ad292f1c0a8d9107fb3e14f705121b50026fed202dc7657fc_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_21469c1397d8166acaa17f543e8c182fcdfeb8be4f20b1b5e213ab5058b9f23e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21469c1397d8166acaa17f543e8c182fcdfeb8be4f20b1b5e213ab5058b9f23e->enter($__internal_21469c1397d8166acaa17f543e8c182fcdfeb8be4f20b1b5e213ab5058b9f23e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_21469c1397d8166acaa17f543e8c182fcdfeb8be4f20b1b5e213ab5058b9f23e->leave($__internal_21469c1397d8166acaa17f543e8c182fcdfeb8be4f20b1b5e213ab5058b9f23e_prof);

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
