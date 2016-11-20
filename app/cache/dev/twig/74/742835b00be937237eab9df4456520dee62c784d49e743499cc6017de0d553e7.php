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
        $__internal_bea7c92ec09befc85fbe796cf7244697f5971017fbad80d6a88d51034c489575 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bea7c92ec09befc85fbe796cf7244697f5971017fbad80d6a88d51034c489575->enter($__internal_bea7c92ec09befc85fbe796cf7244697f5971017fbad80d6a88d51034c489575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_bea7c92ec09befc85fbe796cf7244697f5971017fbad80d6a88d51034c489575->leave($__internal_bea7c92ec09befc85fbe796cf7244697f5971017fbad80d6a88d51034c489575_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_51609c020549ecf2aeede3391f6be693e6207dc6db571bfc06f092db200aa411 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51609c020549ecf2aeede3391f6be693e6207dc6db571bfc06f092db200aa411->enter($__internal_51609c020549ecf2aeede3391f6be693e6207dc6db571bfc06f092db200aa411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_51609c020549ecf2aeede3391f6be693e6207dc6db571bfc06f092db200aa411->leave($__internal_51609c020549ecf2aeede3391f6be693e6207dc6db571bfc06f092db200aa411_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c6e204b618e34c9a6521cefd990a7efca0c4987aed0d4e6c103cafc98da6a864 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6e204b618e34c9a6521cefd990a7efca0c4987aed0d4e6c103cafc98da6a864->enter($__internal_c6e204b618e34c9a6521cefd990a7efca0c4987aed0d4e6c103cafc98da6a864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c6e204b618e34c9a6521cefd990a7efca0c4987aed0d4e6c103cafc98da6a864->leave($__internal_c6e204b618e34c9a6521cefd990a7efca0c4987aed0d4e6c103cafc98da6a864_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a22b454b222972893d7308931eb3f83c7a1d8cb385ad8723620f60a79664d367 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a22b454b222972893d7308931eb3f83c7a1d8cb385ad8723620f60a79664d367->enter($__internal_a22b454b222972893d7308931eb3f83c7a1d8cb385ad8723620f60a79664d367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a22b454b222972893d7308931eb3f83c7a1d8cb385ad8723620f60a79664d367->leave($__internal_a22b454b222972893d7308931eb3f83c7a1d8cb385ad8723620f60a79664d367_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_263d5f7470dcf66f56b456c0ec4685c4a2eeafad11273ca586e18ddd4fde961f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_263d5f7470dcf66f56b456c0ec4685c4a2eeafad11273ca586e18ddd4fde961f->enter($__internal_263d5f7470dcf66f56b456c0ec4685c4a2eeafad11273ca586e18ddd4fde961f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_263d5f7470dcf66f56b456c0ec4685c4a2eeafad11273ca586e18ddd4fde961f->leave($__internal_263d5f7470dcf66f56b456c0ec4685c4a2eeafad11273ca586e18ddd4fde961f_prof);

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
