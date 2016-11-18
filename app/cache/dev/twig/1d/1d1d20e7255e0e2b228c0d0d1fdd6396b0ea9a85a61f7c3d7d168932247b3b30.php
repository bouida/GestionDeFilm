<?php

/* CoreSphereConsoleBundle::base.html.twig */
class __TwigTemplate_74dcea87da3be8af4115eab21c54221618282673a30dbee620949c2e0987ba34 extends Twig_Template
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
        $__internal_20ab37bfef362ecb03eacd64d794d0ff4f7c08da4f1c97ff1dbca0d1da3de5e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20ab37bfef362ecb03eacd64d794d0ff4f7c08da4f1c97ff1dbca0d1da3de5e2->enter($__internal_20ab37bfef362ecb03eacd64d794d0ff4f7c08da4f1c97ff1dbca0d1da3de5e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle::base.html.twig"));

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
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
        echo "    </body>
</html>
";
        
        $__internal_20ab37bfef362ecb03eacd64d794d0ff4f7c08da4f1c97ff1dbca0d1da3de5e2->leave($__internal_20ab37bfef362ecb03eacd64d794d0ff4f7c08da4f1c97ff1dbca0d1da3de5e2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_885f1a9a67b671340123ee7bb4618a088d70cc96be099fff95cd3e3ecc08085f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_885f1a9a67b671340123ee7bb4618a088d70cc96be099fff95cd3e3ecc08085f->enter($__internal_885f1a9a67b671340123ee7bb4618a088d70cc96be099fff95cd3e3ecc08085f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CoreSphere Console";
        
        $__internal_885f1a9a67b671340123ee7bb4618a088d70cc96be099fff95cd3e3ecc08085f->leave($__internal_885f1a9a67b671340123ee7bb4618a088d70cc96be099fff95cd3e3ecc08085f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_92ae5c9be60c7bd5cfd14be395742b9739c5fce25f9fae5b0f5a7a8bb4a2ee19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92ae5c9be60c7bd5cfd14be395742b9739c5fce25f9fae5b0f5a7a8bb4a2ee19->enter($__internal_92ae5c9be60c7bd5cfd14be395742b9739c5fce25f9fae5b0f5a7a8bb4a2ee19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/css/base.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
        
        $__internal_92ae5c9be60c7bd5cfd14be395742b9739c5fce25f9fae5b0f5a7a8bb4a2ee19->leave($__internal_92ae5c9be60c7bd5cfd14be395742b9739c5fce25f9fae5b0f5a7a8bb4a2ee19_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b5886270dd727e3324c693086258a77cac50a521da14079044449f3a599b20c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b5886270dd727e3324c693086258a77cac50a521da14079044449f3a599b20c->enter($__internal_4b5886270dd727e3324c693086258a77cac50a521da14079044449f3a599b20c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "";
        
        $__internal_4b5886270dd727e3324c693086258a77cac50a521da14079044449f3a599b20c->leave($__internal_4b5886270dd727e3324c693086258a77cac50a521da14079044449f3a599b20c_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7056e5ab96a5bf8caca5248e19b447aa575a9746842fcccdc385c0d407c8908e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7056e5ab96a5bf8caca5248e19b447aa575a9746842fcccdc385c0d407c8908e->enter($__internal_7056e5ab96a5bf8caca5248e19b447aa575a9746842fcccdc385c0d407c8908e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            ";
        // line 15
        echo "            <script>
            window.jQuery || document.write('<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js\"><\\/script>')
            </script>
            <script>
            window.jQuery || document.write(\"<script src=\\\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/js/jquery-1.8.3.min.js"), "html", null, true);
        echo "\\\"><\\/script>\");
            </script>
        ";
        
        $__internal_7056e5ab96a5bf8caca5248e19b447aa575a9746842fcccdc385c0d407c8908e->leave($__internal_7056e5ab96a5bf8caca5248e19b447aa575a9746842fcccdc385c0d407c8908e_prof);

    }

    public function getTemplateName()
    {
        return "CoreSphereConsoleBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 19,  107 => 15,  105 => 14,  99 => 13,  87 => 12,  77 => 7,  71 => 6,  59 => 5,  50 => 22,  47 => 13,  45 => 12,  38 => 9,  36 => 6,  32 => 5,  26 => 1,);
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
        <title>{% block title 'CoreSphere Console' %}</title>
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/coresphereconsole/css/base.css') }}\" type=\"text/css\" />
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body '' %}
        {% block javascripts %}
            {# Load jQuery from Google CDN with a local fallback when not laded yet #}
            <script>
            window.jQuery || document.write('<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js\"><\\/script>')
            </script>
            <script>
            window.jQuery || document.write(\"<script src=\\\"{{ asset('bundles/coresphereconsole/js/jquery-1.8.3.min.js') }}\\\"><\\/script>\");
            </script>
        {% endblock %}
    </body>
</html>
", "CoreSphereConsoleBundle::base.html.twig", "C:\\wamp\\www\\GestionDeFilm\\vendor\\coresphere\\console-bundle/Resources/views/base.html.twig");
    }
}
