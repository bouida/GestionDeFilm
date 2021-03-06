<?php

/* FilmBundle:Acteur:acteur.html.twig */
class __TwigTemplate_70c7cecb414143ce3f92e0a2b4e2640f36332da7172f0e1becfbfd5638208e6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FilmBundle::index.html.twig", "FilmBundle:Acteur:acteur.html.twig", 1);
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
        $__internal_3b0322f810947e711befae5e92269288567241d7b9e5c66325c11e726a7397ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b0322f810947e711befae5e92269288567241d7b9e5c66325c11e726a7397ab->enter($__internal_3b0322f810947e711befae5e92269288567241d7b9e5c66325c11e726a7397ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FilmBundle:Acteur:acteur.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b0322f810947e711befae5e92269288567241d7b9e5c66325c11e726a7397ab->leave($__internal_3b0322f810947e711befae5e92269288567241d7b9e5c66325c11e726a7397ab_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_b8e5bf670135338abfacd2f50385fbe503a33a0b8fdb744afd9f8213b1e7fde7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8e5bf670135338abfacd2f50385fbe503a33a0b8fdb744afd9f8213b1e7fde7->enter($__internal_b8e5bf670135338abfacd2f50385fbe503a33a0b8fdb744afd9f8213b1e7fde7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div>
   <p>Voici une liste comprenant des acteurs, à vous de la modifier selon vôtre convenance! </p>
</div>
<table width=\"60%\">
\t<caption><h1>Liste des Acteurs</h1></caption>
\t<thead>
\t\t<tr align=\"left\">
\t\t\t<th>Nom</th>
\t\t\t<th>Prenom</th>
\t\t\t<th>Date de Naissance</th>
\t\t\t<th>sexe</th>
\t\t\t<th>Options</th>
\t\t</tr>
\t</thead>
<tbody>
\t";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["acteurs"]) ? $context["acteurs"] : $this->getContext($context, "acteurs")));
        foreach ($context['_seq'] as $context["_key"] => $context["acteur"]) {
            // line 19
            echo "\t\t<tr>
\t\t\t<td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["acteur"], "nom", array()), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["acteur"], "prenom", array()), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["acteur"], "datenaissance", array()), "d/M/Y"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 23
            if (($this->getAttribute($context["acteur"], "sexe", array()) == "H")) {
                // line 24
                echo "\t\t\t\thomme
\t\t\t";
            } else {
                // line 26
                echo "\t\t\t\tFemme
\t\t\t";
            }
            // line 27
            echo "</td>
\t\t\t<td>
\t\t\t\t<ul>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("acteur_modif", array("id" => $this->getAttribute($context["acteur"], "id", array()))), "html", null, true);
            echo "\">Modifier</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("acteur_supp", array("id" => $this->getAttribute($context["acteur"], "id", array()))), "html", null, true);
            echo "\">Supprimer</a>
\t\t\t\t\t</li>

\t\t\t\t</ul>\t
\t\t\t</td>
\t\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['acteur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "</tbody>
</table>
<a href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("acteur_ajout");
        echo " \">Ajouter un Nouveau Acteur</a>
";
        
        $__internal_b8e5bf670135338abfacd2f50385fbe503a33a0b8fdb744afd9f8213b1e7fde7->leave($__internal_b8e5bf670135338abfacd2f50385fbe503a33a0b8fdb744afd9f8213b1e7fde7_prof);

    }

    public function getTemplateName()
    {
        return "FilmBundle:Acteur:acteur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 43,  111 => 41,  98 => 34,  92 => 31,  86 => 27,  82 => 26,  78 => 24,  76 => 23,  72 => 22,  68 => 21,  64 => 20,  61 => 19,  57 => 18,  40 => 3,  34 => 2,  11 => 1,);
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
<div>
   <p>Voici une liste comprenant des acteurs, à vous de la modifier selon vôtre convenance! </p>
</div>
<table width=\"60%\">
\t<caption><h1>Liste des Acteurs</h1></caption>
\t<thead>
\t\t<tr align=\"left\">
\t\t\t<th>Nom</th>
\t\t\t<th>Prenom</th>
\t\t\t<th>Date de Naissance</th>
\t\t\t<th>sexe</th>
\t\t\t<th>Options</th>
\t\t</tr>
\t</thead>
<tbody>
\t{%for acteur in acteurs%}
\t\t<tr>
\t\t\t<td>{{ acteur.nom }}</td>
\t\t\t<td>{{ acteur.prenom }}</td>
\t\t\t<td>{{ acteur.datenaissance|date(\"d/M/Y\") }}</td>
\t\t\t<td>{% if acteur.sexe ==\"H\"%}
\t\t\t\thomme
\t\t\t{%else%}
\t\t\t\tFemme
\t\t\t{%endif%}</td>
\t\t\t<td>
\t\t\t\t<ul>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"{{ path('acteur_modif', {'id': acteur.id}) }}\">Modifier</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"{{ path('acteur_supp', {'id': acteur.id}) }}\">Supprimer</a>
\t\t\t\t\t</li>

\t\t\t\t</ul>\t
\t\t\t</td>
\t\t</tr>
\t{% endfor %}
</tbody>
</table>
<a href=\"{{path('acteur_ajout')}} \">Ajouter un Nouveau Acteur</a>
{% endblock %}
", "FilmBundle:Acteur:acteur.html.twig", "C:\\wamp\\www\\GestionDeFilm\\src\\FilmBundle/Resources/views/Acteur/acteur.html.twig");
    }
}
