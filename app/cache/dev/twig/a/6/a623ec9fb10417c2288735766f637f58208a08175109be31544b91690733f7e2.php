<?php

/* FilmBundle:Acteur:edit.html.twig */
class __TwigTemplate_6b40cce59588537fd6564afe5fe2878104c7c6f745cd25cf5ef01365e410f33c extends Twig_Template
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
        $__internal_1cecadbcd75764f18beb02c6573d78dcaaf87078687bd0a4a59ffe4ba5ac9cf3 = $this->env->getExtension("native_profiler");
        $__internal_1cecadbcd75764f18beb02c6573d78dcaaf87078687bd0a4a59ffe4ba5ac9cf3->enter($__internal_1cecadbcd75764f18beb02c6573d78dcaaf87078687bd0a4a59ffe4ba5ac9cf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FilmBundle:Acteur:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1cecadbcd75764f18beb02c6573d78dcaaf87078687bd0a4a59ffe4ba5ac9cf3->leave($__internal_1cecadbcd75764f18beb02c6573d78dcaaf87078687bd0a4a59ffe4ba5ac9cf3_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_77dc2739b194ab4bdd50e0eccfc6c2b7bf19afa39232ec7c0c71e764eca55300 = $this->env->getExtension("native_profiler");
        $__internal_77dc2739b194ab4bdd50e0eccfc6c2b7bf19afa39232ec7c0c71e764eca55300->enter($__internal_77dc2739b194ab4bdd50e0eccfc6c2b7bf19afa39232ec7c0c71e764eca55300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<form method=\"post\">
<a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("acteur");
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'label');
        echo "</td>
\t\t\t<td>
\t\t\t\t";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget');
        echo "
\t\t\t\t";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'errors');
        echo "
\t\t\t</td>
\t\t</tr>

\t\t<tr>
\t\t\t<td>";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'label');
        echo "</td>
\t\t\t<td>
\t\t\t\t";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'widget');
        echo "
\t\t\t\t";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'errors');
        echo "
\t\t\t</td>
\t\t</tr>

\t\t<tr>
\t\t\t<td>";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datenaissance", array()), 'label');
        echo "</td>
\t\t\t<td>
\t\t\t\t";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datenaissance", array()), 'widget');
        echo "
\t\t\t\t";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datenaissance", array()), 'errors');
        echo "
\t\t\t</td>
\t\t</tr>

\t\t<tr>
\t\t\t<td>";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexe", array()), 'label');
        echo "</td>
\t\t\t<td>
\t\t\t\t";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexe", array()), 'widget');
        echo "
\t\t\t\t";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexe", array()), 'errors');
        echo "
\t\t\t</td>
\t\t</tr>

</table>
";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
<input type=\"submit\" value=\"Ajouter un Acteur\">
</form>
";
        
        $__internal_77dc2739b194ab4bdd50e0eccfc6c2b7bf19afa39232ec7c0c71e764eca55300->leave($__internal_77dc2739b194ab4bdd50e0eccfc6c2b7bf19afa39232ec7c0c71e764eca55300_prof);

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
}
/* {% extends 'FilmBundle::index.html.twig' %}*/
/* {%block body%}*/
/* <form method="post">*/
/* <a href="{{ path('acteur') }} ">Liste des Acteurs</a>*/
/* <table>*/
/* 	<caption><h1>{{msg}}</h1></caption>*/
/* 	<thead>*/
/* 		<tr>*/
/* 			<td>{{ form_label(form.nom)}}</td>*/
/* 			<td>*/
/* 				{{ form_widget(form.nom)}}*/
/* 				{{ form_errors(form.nom)}}*/
/* 			</td>*/
/* 		</tr>*/
/* */
/* 		<tr>*/
/* 			<td>{{ form_label(form.prenom)}}</td>*/
/* 			<td>*/
/* 				{{ form_widget(form.prenom)}}*/
/* 				{{ form_errors(form.prenom)}}*/
/* 			</td>*/
/* 		</tr>*/
/* */
/* 		<tr>*/
/* 			<td>{{ form_label(form.datenaissance)}}</td>*/
/* 			<td>*/
/* 				{{ form_widget(form.datenaissance)}}*/
/* 				{{ form_errors(form.datenaissance)}}*/
/* 			</td>*/
/* 		</tr>*/
/* */
/* 		<tr>*/
/* 			<td>{{ form_label(form.sexe)}}</td>*/
/* 			<td>*/
/* 				{{ form_widget(form.sexe)}}*/
/* 				{{ form_errors(form.sexe)}}*/
/* 			</td>*/
/* 		</tr>*/
/* */
/* </table>*/
/* {{form_rest(form)}}*/
/* <input type="submit" value="Ajouter un Acteur">*/
/* </form>*/
/* {% endblock %}*/
