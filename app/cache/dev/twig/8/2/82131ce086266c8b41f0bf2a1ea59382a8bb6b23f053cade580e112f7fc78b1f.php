<?php

/* FilmBundle:Acteur:acteur.html.twig */
class __TwigTemplate_26a1ccbe3cef6a796cda4c6f1f324eafaccca4bc077cfa969489f56afb3289c9 extends Twig_Template
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
        $__internal_8a275bc8734d748c8140acfcd0a3bb29635e348a7499258baae365bee3fa4441 = $this->env->getExtension("native_profiler");
        $__internal_8a275bc8734d748c8140acfcd0a3bb29635e348a7499258baae365bee3fa4441->enter($__internal_8a275bc8734d748c8140acfcd0a3bb29635e348a7499258baae365bee3fa4441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FilmBundle:Acteur:acteur.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a275bc8734d748c8140acfcd0a3bb29635e348a7499258baae365bee3fa4441->leave($__internal_8a275bc8734d748c8140acfcd0a3bb29635e348a7499258baae365bee3fa4441_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b7db794989b87e625a0d03339fd4ea07c3fc92845969cd542627db5d658906b = $this->env->getExtension("native_profiler");
        $__internal_4b7db794989b87e625a0d03339fd4ea07c3fc92845969cd542627db5d658906b->enter($__internal_4b7db794989b87e625a0d03339fd4ea07c3fc92845969cd542627db5d658906b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div>
   <p><Font-Weight: Bold>Voici une liste comprenant des acteurs, à vous de la modifier selon vôtre convenance!</Font></p>
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("acteur_modif", array("id" => $this->getAttribute($context["acteur"], "id", array()))), "html", null, true);
            echo "\">Modifier</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("acteur_supp", array("id" => $this->getAttribute($context["acteur"], "id", array()))), "html", null, true);
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
        echo $this->env->getExtension('routing')->getPath("acteur_ajout");
        echo " \">Ajouter un Nouveau Acteur</a>
";
        
        $__internal_4b7db794989b87e625a0d03339fd4ea07c3fc92845969cd542627db5d658906b->leave($__internal_4b7db794989b87e625a0d03339fd4ea07c3fc92845969cd542627db5d658906b_prof);

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
}
/* {% extends 'FilmBundle::index.html.twig' %}*/
/* {%block body%}*/
/* <div>*/
/*    <p><Font-Weight: Bold>Voici une liste comprenant des acteurs, à vous de la modifier selon vôtre convenance!</Font></p>*/
/* </div>*/
/* <table width="60%">*/
/* 	<caption><h1>Liste des Acteurs</h1></caption>*/
/* 	<thead>*/
/* 		<tr align="left">*/
/* 			<th>Nom</th>*/
/* 			<th>Prenom</th>*/
/* 			<th>Date de Naissance</th>*/
/* 			<th>sexe</th>*/
/* 			<th>Options</th>*/
/* 		</tr>*/
/* 	</thead>*/
/* <tbody>*/
/* 	{%for acteur in acteurs%}*/
/* 		<tr>*/
/* 			<td>{{ acteur.nom }}</td>*/
/* 			<td>{{ acteur.prenom }}</td>*/
/* 			<td>{{ acteur.datenaissance|date("d/M/Y") }}</td>*/
/* 			<td>{% if acteur.sexe =="H"%}*/
/* 				homme*/
/* 			{%else%}*/
/* 				Femme*/
/* 			{%endif%}</td>*/
/* 			<td>*/
/* 				<ul>*/
/* 					<li>*/
/* 						<a href="{{ path('acteur_modif', {'id': acteur.id}) }}">Modifier</a>*/
/* 					</li>*/
/* 					<li>*/
/* 						<a href="{{ path('acteur_supp', {'id': acteur.id}) }}">Supprimer</a>*/
/* 					</li>*/
/* */
/* 				</ul>	*/
/* 			</td>*/
/* 		</tr>*/
/* 	{% endfor %}*/
/* </tbody>*/
/* </table>*/
/* <a href="{{path('acteur_ajout')}} ">Ajouter un Nouveau Acteur</a>*/
/* {% endblock %}*/
/* */
