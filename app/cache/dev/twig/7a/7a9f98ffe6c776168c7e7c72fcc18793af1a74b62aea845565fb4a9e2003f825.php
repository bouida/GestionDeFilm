<?php

/* FilmBundle:Acteur:edit.html.twig */
class __TwigTemplate_a23161f7cac66183f285f0f4f0e30d44a7d4366a4e5c31c1fa04171f4667fc13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FilmBundle::index.html.twig", "FilmBundle:Acteur:edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FilmBundle::index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_24fb4b14e06bea69733679145e4b1b8d15a82a204b570d86181b5295053362a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24fb4b14e06bea69733679145e4b1b8d15a82a204b570d86181b5295053362a5->enter($__internal_24fb4b14e06bea69733679145e4b1b8d15a82a204b570d86181b5295053362a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FilmBundle:Acteur:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24fb4b14e06bea69733679145e4b1b8d15a82a204b570d86181b5295053362a5->leave($__internal_24fb4b14e06bea69733679145e4b1b8d15a82a204b570d86181b5295053362a5_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_0dcb2d939f33ca335e23d5dcbed01a4f008a45555b60dcda10572cda0a603ad5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dcb2d939f33ca335e23d5dcbed01a4f008a45555b60dcda10572cda0a603ad5->enter($__internal_0dcb2d939f33ca335e23d5dcbed01a4f008a45555b60dcda10572cda0a603ad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<form method=\"post\">
<a href=\"";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("acteur");
        echo " \">Liste des Acteurs</a>
<table>
\t<caption><h1>";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["msg"]) ? $context["msg"] : $this->getContext($context, "msg")), "html", null, true);
        echo "</h1></caption>
\t<thead>
\t\t<tr>
\t\t\t<td>";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'label');
        echo "</td>
\t\t\t<td>
\t\t\t\t";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget');
        echo "
\t\t\t\t";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'errors');
        echo "
\t\t\t</td>
\t\t</tr>

\t\t<tr>
\t\t\t<td>";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'label');
        echo "</td>
\t\t\t<td>
\t\t\t\t";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'widget');
        echo "
\t\t\t\t";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'errors');
        echo "
\t\t\t</td>
\t\t</tr>

\t\t<tr>
\t\t\t<td>";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datenaissance", array()), 'label');
        echo "</td>
\t\t\t<td>
\t\t\t\t";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datenaissance", array()), 'widget');
        echo "
\t\t\t\t";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datenaissance", array()), 'errors');
        echo "
\t\t\t</td>
\t\t</tr>

\t\t<tr>
\t\t\t<td>";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexe", array()), 'label');
        echo "</td>
\t\t\t<td>
\t\t\t\t";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexe", array()), 'widget');
        echo "
\t\t\t\t";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexe", array()), 'errors');
        echo "
\t\t\t</td>
\t\t</tr>

</table>
";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
<input type=\"submit\" value=\"Ajouter un Acteur\">
</form>
";
        
        $__internal_0dcb2d939f33ca335e23d5dcbed01a4f008a45555b60dcda10572cda0a603ad5->leave($__internal_0dcb2d939f33ca335e23d5dcbed01a4f008a45555b60dcda10572cda0a603ad5_prof);

    }

    public function getTemplateName()
    {
        return "FilmBundle:Acteur:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 41,  114 => 36,  110 => 35,  105 => 33,  97 => 28,  93 => 27,  88 => 25,  80 => 20,  76 => 19,  71 => 17,  63 => 12,  59 => 11,  54 => 9,  48 => 6,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'FilmBundle::index.html.twig' %}
{%block body%}
<form method=\"post\">
<a href=\"{{ path('acteur') }} \">Liste des Acteurs</a>
<table>
\t<caption><h1>{{msg}}</h1></caption>
\t<thead>
\t\t<tr>
\t\t\t<td>{{ form_label(form.nom)}}</td>
\t\t\t<td>
\t\t\t\t{{ form_widget(form.nom)}}
\t\t\t\t{{ form_errors(form.nom)}}
\t\t\t</td>
\t\t</tr>

\t\t<tr>
\t\t\t<td>{{ form_label(form.prenom)}}</td>
\t\t\t<td>
\t\t\t\t{{ form_widget(form.prenom)}}
\t\t\t\t{{ form_errors(form.prenom)}}
\t\t\t</td>
\t\t</tr>

\t\t<tr>
\t\t\t<td>{{ form_label(form.datenaissance)}}</td>
\t\t\t<td>
\t\t\t\t{{ form_widget(form.datenaissance)}}
\t\t\t\t{{ form_errors(form.datenaissance)}}
\t\t\t</td>
\t\t</tr>

\t\t<tr>
\t\t\t<td>{{ form_label(form.sexe)}}</td>
\t\t\t<td>
\t\t\t\t{{ form_widget(form.sexe)}}
\t\t\t\t{{ form_errors(form.sexe)}}
\t\t\t</td>
\t\t</tr>

</table>
{{form_rest(form)}}
<input type=\"submit\" value=\"Ajouter un Acteur\">
</form>
{% endblock %}", "FilmBundle:Acteur:edit.html.twig", "C:\\wamp\\www\\GestionDeFilm\\src\\FilmBundle/Resources/views/Acteur/edit.html.twig");
    }
}
