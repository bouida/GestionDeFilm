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
        $__internal_e33dfd49ecce3e0c1e9908e74d93309292b3495521291f5b550be9bfadba00b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e33dfd49ecce3e0c1e9908e74d93309292b3495521291f5b550be9bfadba00b8->enter($__internal_e33dfd49ecce3e0c1e9908e74d93309292b3495521291f5b550be9bfadba00b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_e33dfd49ecce3e0c1e9908e74d93309292b3495521291f5b550be9bfadba00b8->leave($__internal_e33dfd49ecce3e0c1e9908e74d93309292b3495521291f5b550be9bfadba00b8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ce8f8dec40229d6ae227b6a2795f95fa6939ce2e8d790b7160f96c648a0bed8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce8f8dec40229d6ae227b6a2795f95fa6939ce2e8d790b7160f96c648a0bed8e->enter($__internal_ce8f8dec40229d6ae227b6a2795f95fa6939ce2e8d790b7160f96c648a0bed8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ce8f8dec40229d6ae227b6a2795f95fa6939ce2e8d790b7160f96c648a0bed8e->leave($__internal_ce8f8dec40229d6ae227b6a2795f95fa6939ce2e8d790b7160f96c648a0bed8e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_39ac215f0b0bd903449be1f4d18999fc654271042d398e09e064110578f6b1db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39ac215f0b0bd903449be1f4d18999fc654271042d398e09e064110578f6b1db->enter($__internal_39ac215f0b0bd903449be1f4d18999fc654271042d398e09e064110578f6b1db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_39ac215f0b0bd903449be1f4d18999fc654271042d398e09e064110578f6b1db->leave($__internal_39ac215f0b0bd903449be1f4d18999fc654271042d398e09e064110578f6b1db_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1da7a1a28480581becf4ce6ca61b907da71a23a73b210539c457369770e4688d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1da7a1a28480581becf4ce6ca61b907da71a23a73b210539c457369770e4688d->enter($__internal_1da7a1a28480581becf4ce6ca61b907da71a23a73b210539c457369770e4688d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1da7a1a28480581becf4ce6ca61b907da71a23a73b210539c457369770e4688d->leave($__internal_1da7a1a28480581becf4ce6ca61b907da71a23a73b210539c457369770e4688d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_10f0ae3b45eae59352a3a790c254fdb49fbdf2aab5ae4b0cd8e37b88d1c53dc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10f0ae3b45eae59352a3a790c254fdb49fbdf2aab5ae4b0cd8e37b88d1c53dc3->enter($__internal_10f0ae3b45eae59352a3a790c254fdb49fbdf2aab5ae4b0cd8e37b88d1c53dc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_10f0ae3b45eae59352a3a790c254fdb49fbdf2aab5ae4b0cd8e37b88d1c53dc3->leave($__internal_10f0ae3b45eae59352a3a790c254fdb49fbdf2aab5ae4b0cd8e37b88d1c53dc3_prof);

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
