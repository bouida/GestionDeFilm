<?php

/* form_div_layout.html.twig */
class __TwigTemplate_f51de5fa9ff3db381beb7395e252a31ab9fbc4f2d950e6ebbafb9f643a437f81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_widget' => array($this, 'block_form_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'form_widget_compound' => array($this, 'block_form_widget_compound'),
            'collection_widget' => array($this, 'block_collection_widget'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'choice_widget' => array($this, 'block_choice_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_options' => array($this, 'block_choice_widget_options'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'number_widget' => array($this, 'block_number_widget'),
            'integer_widget' => array($this, 'block_integer_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'url_widget' => array($this, 'block_url_widget'),
            'search_widget' => array($this, 'block_search_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'password_widget' => array($this, 'block_password_widget'),
            'hidden_widget' => array($this, 'block_hidden_widget'),
            'email_widget' => array($this, 'block_email_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'submit_widget' => array($this, 'block_submit_widget'),
            'reset_widget' => array($this, 'block_reset_widget'),
            'form_label' => array($this, 'block_form_label'),
            'button_label' => array($this, 'block_button_label'),
            'repeated_row' => array($this, 'block_repeated_row'),
            'form_row' => array($this, 'block_form_row'),
            'button_row' => array($this, 'block_button_row'),
            'hidden_row' => array($this, 'block_hidden_row'),
            'form' => array($this, 'block_form'),
            'form_start' => array($this, 'block_form_start'),
            'form_end' => array($this, 'block_form_end'),
            'form_enctype' => array($this, 'block_form_enctype'),
            'form_errors' => array($this, 'block_form_errors'),
            'form_rest' => array($this, 'block_form_rest'),
            'form_rows' => array($this, 'block_form_rows'),
            'widget_attributes' => array($this, 'block_widget_attributes'),
            'widget_container_attributes' => array($this, 'block_widget_container_attributes'),
            'button_attributes' => array($this, 'block_button_attributes'),
            'attributes' => array($this, 'block_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c7d07184e0e829adcd0c013371c2bf9149a67ce00623f959c93e822383432bd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7d07184e0e829adcd0c013371c2bf9149a67ce00623f959c93e822383432bd6->enter($__internal_c7d07184e0e829adcd0c013371c2bf9149a67ce00623f959c93e822383432bd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_div_layout.html.twig"));

        // line 3
        $this->displayBlock('form_widget', $context, $blocks);
        // line 11
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 16
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 26
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 33
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 37
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 45
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 54
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 74
        $this->displayBlock('choice_widget_options', $context, $blocks);
        // line 87
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 91
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 95
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 108
        $this->displayBlock('date_widget', $context, $blocks);
        // line 122
        $this->displayBlock('time_widget', $context, $blocks);
        // line 133
        $this->displayBlock('number_widget', $context, $blocks);
        // line 139
        $this->displayBlock('integer_widget', $context, $blocks);
        // line 144
        $this->displayBlock('money_widget', $context, $blocks);
        // line 148
        $this->displayBlock('url_widget', $context, $blocks);
        // line 153
        $this->displayBlock('search_widget', $context, $blocks);
        // line 158
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 163
        $this->displayBlock('password_widget', $context, $blocks);
        // line 168
        $this->displayBlock('hidden_widget', $context, $blocks);
        // line 173
        $this->displayBlock('email_widget', $context, $blocks);
        // line 178
        $this->displayBlock('button_widget', $context, $blocks);
        // line 192
        $this->displayBlock('submit_widget', $context, $blocks);
        // line 197
        $this->displayBlock('reset_widget', $context, $blocks);
        // line 204
        $this->displayBlock('form_label', $context, $blocks);
        // line 226
        $this->displayBlock('button_label', $context, $blocks);
        // line 230
        $this->displayBlock('repeated_row', $context, $blocks);
        // line 238
        $this->displayBlock('form_row', $context, $blocks);
        // line 246
        $this->displayBlock('button_row', $context, $blocks);
        // line 252
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 258
        $this->displayBlock('form', $context, $blocks);
        // line 264
        $this->displayBlock('form_start', $context, $blocks);
        // line 277
        $this->displayBlock('form_end', $context, $blocks);
        // line 284
        $this->displayBlock('form_enctype', $context, $blocks);
        // line 288
        $this->displayBlock('form_errors', $context, $blocks);
        // line 298
        $this->displayBlock('form_rest', $context, $blocks);
        // line 305
        echo "
";
        // line 308
        $this->displayBlock('form_rows', $context, $blocks);
        // line 314
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 331
        $this->displayBlock('widget_container_attributes', $context, $blocks);
        // line 345
        $this->displayBlock('button_attributes', $context, $blocks);
        // line 359
        $this->displayBlock('attributes', $context, $blocks);
        
        $__internal_c7d07184e0e829adcd0c013371c2bf9149a67ce00623f959c93e822383432bd6->leave($__internal_c7d07184e0e829adcd0c013371c2bf9149a67ce00623f959c93e822383432bd6_prof);

    }

    // line 3
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_43a5695b0215f58a12b4c5da65edd311971dba47ba735e74f28edf4cea45e4c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43a5695b0215f58a12b4c5da65edd311971dba47ba735e74f28edf4cea45e4c3->enter($__internal_43a5695b0215f58a12b4c5da65edd311971dba47ba735e74f28edf4cea45e4c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 4
        if ((isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
            // line 5
            $this->displayBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 7
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_43a5695b0215f58a12b4c5da65edd311971dba47ba735e74f28edf4cea45e4c3->leave($__internal_43a5695b0215f58a12b4c5da65edd311971dba47ba735e74f28edf4cea45e4c3_prof);

    }

    // line 11
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_738db793a8bc593fe66749c06de8b701ea45061ecc2a83d71a623a3870b6badf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_738db793a8bc593fe66749c06de8b701ea45061ecc2a83d71a623a3870b6badf->enter($__internal_738db793a8bc593fe66749c06de8b701ea45061ecc2a83d71a623a3870b6badf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 12
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 13
        echo "<input type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        echo "/>";
        
        $__internal_738db793a8bc593fe66749c06de8b701ea45061ecc2a83d71a623a3870b6badf->leave($__internal_738db793a8bc593fe66749c06de8b701ea45061ecc2a83d71a623a3870b6badf_prof);

    }

    // line 16
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_db304e14aac7dc13ba4e822c5e3d16bb71b7ca7e31f34a3caf92dabc1f5e654a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db304e14aac7dc13ba4e822c5e3d16bb71b7ca7e31f34a3caf92dabc1f5e654a->enter($__internal_db304e14aac7dc13ba4e822c5e3d16bb71b7ca7e31f34a3caf92dabc1f5e654a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 17
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 18
        if (twig_test_empty($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()))) {
            // line 19
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        }
        // line 21
        $this->displayBlock("form_rows", $context, $blocks);
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        // line 23
        echo "</div>";
        
        $__internal_db304e14aac7dc13ba4e822c5e3d16bb71b7ca7e31f34a3caf92dabc1f5e654a->leave($__internal_db304e14aac7dc13ba4e822c5e3d16bb71b7ca7e31f34a3caf92dabc1f5e654a_prof);

    }

    // line 26
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_7d62fb86e967d734131463d86a383aecf1463c8baee8e4476d823cbcffbe712d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d62fb86e967d734131463d86a383aecf1463c8baee8e4476d823cbcffbe712d->enter($__internal_7d62fb86e967d734131463d86a383aecf1463c8baee8e4476d823cbcffbe712d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 27
        if (array_key_exists("prototype", $context)) {
            // line 28
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-prototype" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["prototype"]) ? $context["prototype"] : $this->getContext($context, "prototype")), 'row')));
        }
        // line 30
        $this->displayBlock("form_widget", $context, $blocks);
        
        $__internal_7d62fb86e967d734131463d86a383aecf1463c8baee8e4476d823cbcffbe712d->leave($__internal_7d62fb86e967d734131463d86a383aecf1463c8baee8e4476d823cbcffbe712d_prof);

    }

    // line 33
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_0a8048b135b418e01b5759703e8410b860c0ffd41c1608cd4af949c461e27c68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a8048b135b418e01b5759703e8410b860c0ffd41c1608cd4af949c461e27c68->enter($__internal_0a8048b135b418e01b5759703e8410b860c0ffd41c1608cd4af949c461e27c68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 34
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>";
        
        $__internal_0a8048b135b418e01b5759703e8410b860c0ffd41c1608cd4af949c461e27c68->leave($__internal_0a8048b135b418e01b5759703e8410b860c0ffd41c1608cd4af949c461e27c68_prof);

    }

    // line 37
    public function block_choice_widget($context, array $blocks = array())
    {
        $__internal_63ea373d38628cc578ff169ffa9a89d244eadc37df7eec440299140a10d8ef2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63ea373d38628cc578ff169ffa9a89d244eadc37df7eec440299140a10d8ef2a->enter($__internal_63ea373d38628cc578ff169ffa9a89d244eadc37df7eec440299140a10d8ef2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        // line 38
        if ((isset($context["expanded"]) ? $context["expanded"] : $this->getContext($context, "expanded"))) {
            // line 39
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
        } else {
            // line 41
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
        }
        
        $__internal_63ea373d38628cc578ff169ffa9a89d244eadc37df7eec440299140a10d8ef2a->leave($__internal_63ea373d38628cc578ff169ffa9a89d244eadc37df7eec440299140a10d8ef2a_prof);

    }

    // line 45
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_c89fce34d1489d5598bd0a6832a7a40d5507a89f682a16519d0c98dc9d3ccf96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c89fce34d1489d5598bd0a6832a7a40d5507a89f682a16519d0c98dc9d3ccf96->enter($__internal_c89fce34d1489d5598bd0a6832a7a40d5507a89f682a16519d0c98dc9d3ccf96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 46
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 48
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget');
            // line 49
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'label', array("translation_domain" => (isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "</div>";
        
        $__internal_c89fce34d1489d5598bd0a6832a7a40d5507a89f682a16519d0c98dc9d3ccf96->leave($__internal_c89fce34d1489d5598bd0a6832a7a40d5507a89f682a16519d0c98dc9d3ccf96_prof);

    }

    // line 54
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_9827c8a46f03f29fce98c4d385ea108315482d5eeeb6a461f757e32e8a791175 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9827c8a46f03f29fce98c4d385ea108315482d5eeeb6a461f757e32e8a791175->enter($__internal_9827c8a46f03f29fce98c4d385ea108315482d5eeeb6a461f757e32e8a791175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 55
        if ((((((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && (null === (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")))) &&  !(isset($context["placeholder_in_choices"]) ? $context["placeholder_in_choices"] : $this->getContext($context, "placeholder_in_choices"))) &&  !(isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) && ( !$this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "size", array(), "any", true, true) || ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "size", array()) <= 1)))) {
            // line 56
            $context["required"] = false;
        }
        // line 58
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 59
        if ( !(null === (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")))) {
            // line 60
            echo "<option value=\"\"";
            if (((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")) != "")) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")))) : ("")), "html", null, true);
            echo "</option>";
        }
        // line 62
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 63
            $context["options"] = (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"));
            // line 64
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 65
            if (((twig_length_filter($this->env, (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"))) > 0) &&  !(null === (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator"))))) {
                // line 66
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 69
        $context["options"] = (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"));
        // line 70
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 71
        echo "</select>";
        
        $__internal_9827c8a46f03f29fce98c4d385ea108315482d5eeeb6a461f757e32e8a791175->leave($__internal_9827c8a46f03f29fce98c4d385ea108315482d5eeeb6a461f757e32e8a791175_prof);

    }

    // line 74
    public function block_choice_widget_options($context, array $blocks = array())
    {
        $__internal_56855c0e79e401a502815587c9972addd54251ac6d8cedffea4978eb615fd00b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56855c0e79e401a502815587c9972addd54251ac6d8cedffea4978eb615fd00b->enter($__internal_56855c0e79e401a502815587c9972addd54251ac6d8cedffea4978eb615fd00b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 76
            if (twig_test_iterable($context["choice"])) {
                // line 77
                echo "<optgroup label=\"";
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain")) === false)) ? ($context["group_label"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["group_label"], array(), (isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))))), "html", null, true);
                echo "\">
                ";
                // line 78
                $context["options"] = $context["choice"];
                // line 79
                $this->displayBlock("choice_widget_options", $context, $blocks);
                // line 80
                echo "</optgroup>";
            } else {
                // line 82
                echo "<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "value", array()), "html", null, true);
                echo "\"";
                if ($this->getAttribute($context["choice"], "attr", array())) {
                    echo " ";
                    $context["attr"] = $this->getAttribute($context["choice"], "attr", array());
                    $this->displayBlock("attributes", $context, $blocks);
                }
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->isSelectedChoice($context["choice"], (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain")) === false)) ? ($this->getAttribute($context["choice"], "label", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["choice"], "label", array()), array(), (isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))))), "html", null, true);
                echo "</option>";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_56855c0e79e401a502815587c9972addd54251ac6d8cedffea4978eb615fd00b->leave($__internal_56855c0e79e401a502815587c9972addd54251ac6d8cedffea4978eb615fd00b_prof);

    }

    // line 87
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_3a56494bedeab020a816e1c1100ae5e19c4b0577076433ec801075f8adb44cd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a56494bedeab020a816e1c1100ae5e19c4b0577076433ec801075f8adb44cd0->enter($__internal_3a56494bedeab020a816e1c1100ae5e19c4b0577076433ec801075f8adb44cd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 88
        echo "<input type=\"checkbox\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_3a56494bedeab020a816e1c1100ae5e19c4b0577076433ec801075f8adb44cd0->leave($__internal_3a56494bedeab020a816e1c1100ae5e19c4b0577076433ec801075f8adb44cd0_prof);

    }

    // line 91
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_0fefa9954992b88af67a73de7ad0f80e01a1b724b56873734244109c7247ad78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fefa9954992b88af67a73de7ad0f80e01a1b724b56873734244109c7247ad78->enter($__internal_0fefa9954992b88af67a73de7ad0f80e01a1b724b56873734244109c7247ad78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 92
        echo "<input type=\"radio\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_0fefa9954992b88af67a73de7ad0f80e01a1b724b56873734244109c7247ad78->leave($__internal_0fefa9954992b88af67a73de7ad0f80e01a1b724b56873734244109c7247ad78_prof);

    }

    // line 95
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_048e5a2ed5cc35f3d10e806b8b60e9c7b584d696aa39d4bc19cb251f6bcbc555 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_048e5a2ed5cc35f3d10e806b8b60e9c7b584d696aa39d4bc19cb251f6bcbc555->enter($__internal_048e5a2ed5cc35f3d10e806b8b60e9c7b584d696aa39d4bc19cb251f6bcbc555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 96
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 97
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 99
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 100
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            // line 101
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            // line 102
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget');
            // line 103
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget');
            // line 104
            echo "</div>";
        }
        
        $__internal_048e5a2ed5cc35f3d10e806b8b60e9c7b584d696aa39d4bc19cb251f6bcbc555->leave($__internal_048e5a2ed5cc35f3d10e806b8b60e9c7b584d696aa39d4bc19cb251f6bcbc555_prof);

    }

    // line 108
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_effbc90bd232f6f3a95019f195902cd907901523c92a6795cb68eeb4b4a991d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_effbc90bd232f6f3a95019f195902cd907901523c92a6795cb68eeb4b4a991d9->enter($__internal_effbc90bd232f6f3a95019f195902cd907901523c92a6795cb68eeb4b4a991d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 109
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 110
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 112
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 113
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 114
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 115
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 116
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 118
            echo "</div>";
        }
        
        $__internal_effbc90bd232f6f3a95019f195902cd907901523c92a6795cb68eeb4b4a991d9->leave($__internal_effbc90bd232f6f3a95019f195902cd907901523c92a6795cb68eeb4b4a991d9_prof);

    }

    // line 122
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_487199b501f6f06f4e567bb664192a22fd9aba20756b0c090c92023c7eb3db00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_487199b501f6f06f4e567bb664192a22fd9aba20756b0c090c92023c7eb3db00->enter($__internal_487199b501f6f06f4e567bb664192a22fd9aba20756b0c090c92023c7eb3db00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 123
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 124
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 126
            $context["vars"] = ((((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "text")) ? (array("attr" => array("size" => 1))) : (array()));
            // line 127
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 128
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
            }
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
            }
            // line 129
            echo "        </div>";
        }
        
        $__internal_487199b501f6f06f4e567bb664192a22fd9aba20756b0c090c92023c7eb3db00->leave($__internal_487199b501f6f06f4e567bb664192a22fd9aba20756b0c090c92023c7eb3db00_prof);

    }

    // line 133
    public function block_number_widget($context, array $blocks = array())
    {
        $__internal_e126bae9f4f32e8b9080ef190d8de6869ccec852ffb996dc3e1f7041c3a56c3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e126bae9f4f32e8b9080ef190d8de6869ccec852ffb996dc3e1f7041c3a56c3c->enter($__internal_e126bae9f4f32e8b9080ef190d8de6869ccec852ffb996dc3e1f7041c3a56c3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        // line 135
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 136
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_e126bae9f4f32e8b9080ef190d8de6869ccec852ffb996dc3e1f7041c3a56c3c->leave($__internal_e126bae9f4f32e8b9080ef190d8de6869ccec852ffb996dc3e1f7041c3a56c3c_prof);

    }

    // line 139
    public function block_integer_widget($context, array $blocks = array())
    {
        $__internal_56ac7b17ac6910a34571e6a9624c1dc028564c55cf72a705943f8b80d0ec3c10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56ac7b17ac6910a34571e6a9624c1dc028564c55cf72a705943f8b80d0ec3c10->enter($__internal_56ac7b17ac6910a34571e6a9624c1dc028564c55cf72a705943f8b80d0ec3c10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        // line 140
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "number")) : ("number"));
        // line 141
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_56ac7b17ac6910a34571e6a9624c1dc028564c55cf72a705943f8b80d0ec3c10->leave($__internal_56ac7b17ac6910a34571e6a9624c1dc028564c55cf72a705943f8b80d0ec3c10_prof);

    }

    // line 144
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_2747f43f355f095798615366cd96b21189ddc45deae6fb2383f7a5177b2dca00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2747f43f355f095798615366cd96b21189ddc45deae6fb2383f7a5177b2dca00->enter($__internal_2747f43f355f095798615366cd96b21189ddc45deae6fb2383f7a5177b2dca00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 145
        echo twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" =>         $this->renderBlock("form_widget_simple", $context, $blocks)));
        
        $__internal_2747f43f355f095798615366cd96b21189ddc45deae6fb2383f7a5177b2dca00->leave($__internal_2747f43f355f095798615366cd96b21189ddc45deae6fb2383f7a5177b2dca00_prof);

    }

    // line 148
    public function block_url_widget($context, array $blocks = array())
    {
        $__internal_a890062f5b937519c744a2436beae4436f5f0e8a9724dadc88a3e5f0886328bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a890062f5b937519c744a2436beae4436f5f0e8a9724dadc88a3e5f0886328bf->enter($__internal_a890062f5b937519c744a2436beae4436f5f0e8a9724dadc88a3e5f0886328bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        // line 149
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "url")) : ("url"));
        // line 150
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_a890062f5b937519c744a2436beae4436f5f0e8a9724dadc88a3e5f0886328bf->leave($__internal_a890062f5b937519c744a2436beae4436f5f0e8a9724dadc88a3e5f0886328bf_prof);

    }

    // line 153
    public function block_search_widget($context, array $blocks = array())
    {
        $__internal_1e19f3418055f728f49139d1fb6ae9c178798ed98c1f2897150efd21504b5db9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e19f3418055f728f49139d1fb6ae9c178798ed98c1f2897150efd21504b5db9->enter($__internal_1e19f3418055f728f49139d1fb6ae9c178798ed98c1f2897150efd21504b5db9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        // line 154
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "search")) : ("search"));
        // line 155
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_1e19f3418055f728f49139d1fb6ae9c178798ed98c1f2897150efd21504b5db9->leave($__internal_1e19f3418055f728f49139d1fb6ae9c178798ed98c1f2897150efd21504b5db9_prof);

    }

    // line 158
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_58f89896d702f2861558424b09d3692ed8f0d0e7e2768c6e844911d4c21ee2f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58f89896d702f2861558424b09d3692ed8f0d0e7e2768c6e844911d4c21ee2f7->enter($__internal_58f89896d702f2861558424b09d3692ed8f0d0e7e2768c6e844911d4c21ee2f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 159
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 160
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo " %";
        
        $__internal_58f89896d702f2861558424b09d3692ed8f0d0e7e2768c6e844911d4c21ee2f7->leave($__internal_58f89896d702f2861558424b09d3692ed8f0d0e7e2768c6e844911d4c21ee2f7_prof);

    }

    // line 163
    public function block_password_widget($context, array $blocks = array())
    {
        $__internal_f65a6feb5cbe8ed8ca0516148a46b06293315b0d7525e38f48365b7727f1ff64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f65a6feb5cbe8ed8ca0516148a46b06293315b0d7525e38f48365b7727f1ff64->enter($__internal_f65a6feb5cbe8ed8ca0516148a46b06293315b0d7525e38f48365b7727f1ff64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        // line 164
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "password")) : ("password"));
        // line 165
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_f65a6feb5cbe8ed8ca0516148a46b06293315b0d7525e38f48365b7727f1ff64->leave($__internal_f65a6feb5cbe8ed8ca0516148a46b06293315b0d7525e38f48365b7727f1ff64_prof);

    }

    // line 168
    public function block_hidden_widget($context, array $blocks = array())
    {
        $__internal_9f9bc6e55511ec9761c779ef3f38ce684e25d250c6ab592c0ac317e558196dea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f9bc6e55511ec9761c779ef3f38ce684e25d250c6ab592c0ac317e558196dea->enter($__internal_9f9bc6e55511ec9761c779ef3f38ce684e25d250c6ab592c0ac317e558196dea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        // line 169
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "hidden")) : ("hidden"));
        // line 170
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_9f9bc6e55511ec9761c779ef3f38ce684e25d250c6ab592c0ac317e558196dea->leave($__internal_9f9bc6e55511ec9761c779ef3f38ce684e25d250c6ab592c0ac317e558196dea_prof);

    }

    // line 173
    public function block_email_widget($context, array $blocks = array())
    {
        $__internal_73fce8dc56cdc17ff73d7fc98ab1d8815134e2ff9cc30879b2bc915d6255c95f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73fce8dc56cdc17ff73d7fc98ab1d8815134e2ff9cc30879b2bc915d6255c95f->enter($__internal_73fce8dc56cdc17ff73d7fc98ab1d8815134e2ff9cc30879b2bc915d6255c95f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        // line 174
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "email")) : ("email"));
        // line 175
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_73fce8dc56cdc17ff73d7fc98ab1d8815134e2ff9cc30879b2bc915d6255c95f->leave($__internal_73fce8dc56cdc17ff73d7fc98ab1d8815134e2ff9cc30879b2bc915d6255c95f_prof);

    }

    // line 178
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_c40aac26b6c92bceab5dc43b30b9956da808dce1a8b4651ff73bb9f0be45a146 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c40aac26b6c92bceab5dc43b30b9956da808dce1a8b4651ff73bb9f0be45a146->enter($__internal_c40aac26b6c92bceab5dc43b30b9956da808dce1a8b4651ff73bb9f0be45a146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 179
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
            // line 180
            if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                // line 181
                $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                 // line 182
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                 // line 183
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
            } else {
                // line 186
                $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
            }
        }
        // line 189
        echo "<button type=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
        echo "</button>";
        
        $__internal_c40aac26b6c92bceab5dc43b30b9956da808dce1a8b4651ff73bb9f0be45a146->leave($__internal_c40aac26b6c92bceab5dc43b30b9956da808dce1a8b4651ff73bb9f0be45a146_prof);

    }

    // line 192
    public function block_submit_widget($context, array $blocks = array())
    {
        $__internal_13b8227b0a748cecc8f4f18c6e07545dc936db47dcaff1fa944e602d787995aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13b8227b0a748cecc8f4f18c6e07545dc936db47dcaff1fa944e602d787995aa->enter($__internal_13b8227b0a748cecc8f4f18c6e07545dc936db47dcaff1fa944e602d787995aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        // line 193
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "submit")) : ("submit"));
        // line 194
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_13b8227b0a748cecc8f4f18c6e07545dc936db47dcaff1fa944e602d787995aa->leave($__internal_13b8227b0a748cecc8f4f18c6e07545dc936db47dcaff1fa944e602d787995aa_prof);

    }

    // line 197
    public function block_reset_widget($context, array $blocks = array())
    {
        $__internal_d37d185c69014cedd96dafba2b8617780b902eb6b1f458d98d31236a564e641d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d37d185c69014cedd96dafba2b8617780b902eb6b1f458d98d31236a564e641d->enter($__internal_d37d185c69014cedd96dafba2b8617780b902eb6b1f458d98d31236a564e641d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        // line 198
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "reset")) : ("reset"));
        // line 199
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_d37d185c69014cedd96dafba2b8617780b902eb6b1f458d98d31236a564e641d->leave($__internal_d37d185c69014cedd96dafba2b8617780b902eb6b1f458d98d31236a564e641d_prof);

    }

    // line 204
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_39054d2a5656534855427a5617a5a9348e8fc58cb3598a14cd5c6d54d387ef54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39054d2a5656534855427a5617a5a9348e8fc58cb3598a14cd5c6d54d387ef54->enter($__internal_39054d2a5656534855427a5617a5a9348e8fc58cb3598a14cd5c6d54d387ef54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 205
        if ( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
            // line 206
            if ( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
                // line 207
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
            }
            // line 209
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 210
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 212
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
                // line 213
                if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                    // line 214
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                     // line 215
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                     // line 216
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                } else {
                    // line 219
                    $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                }
            }
            // line 222
            echo "<label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
            echo "</label>";
        }
        
        $__internal_39054d2a5656534855427a5617a5a9348e8fc58cb3598a14cd5c6d54d387ef54->leave($__internal_39054d2a5656534855427a5617a5a9348e8fc58cb3598a14cd5c6d54d387ef54_prof);

    }

    // line 226
    public function block_button_label($context, array $blocks = array())
    {
        $__internal_19c78981ed9dfd179e4fcc6038c0e224dfadc37a4e973e01e2f03e2baa464cc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19c78981ed9dfd179e4fcc6038c0e224dfadc37a4e973e01e2f03e2baa464cc7->enter($__internal_19c78981ed9dfd179e4fcc6038c0e224dfadc37a4e973e01e2f03e2baa464cc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        
        $__internal_19c78981ed9dfd179e4fcc6038c0e224dfadc37a4e973e01e2f03e2baa464cc7->leave($__internal_19c78981ed9dfd179e4fcc6038c0e224dfadc37a4e973e01e2f03e2baa464cc7_prof);

    }

    // line 230
    public function block_repeated_row($context, array $blocks = array())
    {
        $__internal_55c8ace763e4873b6c752eedaced2f7acbb9060b7e1c8fa45915ade6632ed19a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55c8ace763e4873b6c752eedaced2f7acbb9060b7e1c8fa45915ade6632ed19a->enter($__internal_55c8ace763e4873b6c752eedaced2f7acbb9060b7e1c8fa45915ade6632ed19a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        // line 235
        $this->displayBlock("form_rows", $context, $blocks);
        
        $__internal_55c8ace763e4873b6c752eedaced2f7acbb9060b7e1c8fa45915ade6632ed19a->leave($__internal_55c8ace763e4873b6c752eedaced2f7acbb9060b7e1c8fa45915ade6632ed19a_prof);

    }

    // line 238
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_7256e7eaee7391eed456238c86f84cde2c2d0aee25f087b02e62af4768e769fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7256e7eaee7391eed456238c86f84cde2c2d0aee25f087b02e62af4768e769fb->enter($__internal_7256e7eaee7391eed456238c86f84cde2c2d0aee25f087b02e62af4768e769fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 239
        echo "<div>";
        // line 240
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 241
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 242
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 243
        echo "</div>";
        
        $__internal_7256e7eaee7391eed456238c86f84cde2c2d0aee25f087b02e62af4768e769fb->leave($__internal_7256e7eaee7391eed456238c86f84cde2c2d0aee25f087b02e62af4768e769fb_prof);

    }

    // line 246
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_7e68d177618b6c0f739f9145469eff6d61f723994f9fdc8c4ef0afc2d8be6a73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e68d177618b6c0f739f9145469eff6d61f723994f9fdc8c4ef0afc2d8be6a73->enter($__internal_7e68d177618b6c0f739f9145469eff6d61f723994f9fdc8c4ef0afc2d8be6a73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 247
        echo "<div>";
        // line 248
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 249
        echo "</div>";
        
        $__internal_7e68d177618b6c0f739f9145469eff6d61f723994f9fdc8c4ef0afc2d8be6a73->leave($__internal_7e68d177618b6c0f739f9145469eff6d61f723994f9fdc8c4ef0afc2d8be6a73_prof);

    }

    // line 252
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_452af6a29bd9c5e591794c0c9c1175e457d872984880cf9b4026d20641cb5a19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_452af6a29bd9c5e591794c0c9c1175e457d872984880cf9b4026d20641cb5a19->enter($__internal_452af6a29bd9c5e591794c0c9c1175e457d872984880cf9b4026d20641cb5a19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 253
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        
        $__internal_452af6a29bd9c5e591794c0c9c1175e457d872984880cf9b4026d20641cb5a19->leave($__internal_452af6a29bd9c5e591794c0c9c1175e457d872984880cf9b4026d20641cb5a19_prof);

    }

    // line 258
    public function block_form($context, array $blocks = array())
    {
        $__internal_c8ccb5d999f3f2d5a8cc7c88b33decce883768d1eebdf7e9a9a0251ee04ab41c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8ccb5d999f3f2d5a8cc7c88b33decce883768d1eebdf7e9a9a0251ee04ab41c->enter($__internal_c8ccb5d999f3f2d5a8cc7c88b33decce883768d1eebdf7e9a9a0251ee04ab41c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 259
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        // line 260
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 261
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        
        $__internal_c8ccb5d999f3f2d5a8cc7c88b33decce883768d1eebdf7e9a9a0251ee04ab41c->leave($__internal_c8ccb5d999f3f2d5a8cc7c88b33decce883768d1eebdf7e9a9a0251ee04ab41c_prof);

    }

    // line 264
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_aae84b7abd874c0240901629707a99b574c5738ad31f4956624362783371b505 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aae84b7abd874c0240901629707a99b574c5738ad31f4956624362783371b505->enter($__internal_aae84b7abd874c0240901629707a99b574c5738ad31f4956624362783371b505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 265
        $context["method"] = twig_upper_filter($this->env, (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")));
        // line 266
        if (twig_in_filter((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), array(0 => "GET", 1 => "POST"))) {
            // line 267
            $context["form_method"] = (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method"));
        } else {
            // line 269
            $context["form_method"] = "POST";
        }
        // line 271
        echo "<form name=\"";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["form_method"]) ? $context["form_method"] : $this->getContext($context, "form_method"))), "html", null, true);
        echo "\" action=\"";
        echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "html", null, true);
        echo "\"";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        if ((isset($context["multipart"]) ? $context["multipart"] : $this->getContext($context, "multipart"))) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo ">";
        // line 272
        if (((isset($context["form_method"]) ? $context["form_method"] : $this->getContext($context, "form_method")) != (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")))) {
            // line 273
            echo "<input type=\"hidden\" name=\"_method\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "html", null, true);
            echo "\" />";
        }
        
        $__internal_aae84b7abd874c0240901629707a99b574c5738ad31f4956624362783371b505->leave($__internal_aae84b7abd874c0240901629707a99b574c5738ad31f4956624362783371b505_prof);

    }

    // line 277
    public function block_form_end($context, array $blocks = array())
    {
        $__internal_5321cf432db830ccde08340f3551cacb6f46fc89f4bdaba1f1d07de53d21a9b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5321cf432db830ccde08340f3551cacb6f46fc89f4bdaba1f1d07de53d21a9b1->enter($__internal_5321cf432db830ccde08340f3551cacb6f46fc89f4bdaba1f1d07de53d21a9b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        // line 278
        if (( !array_key_exists("render_rest", $context) || (isset($context["render_rest"]) ? $context["render_rest"] : $this->getContext($context, "render_rest")))) {
            // line 279
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        }
        // line 281
        echo "</form>";
        
        $__internal_5321cf432db830ccde08340f3551cacb6f46fc89f4bdaba1f1d07de53d21a9b1->leave($__internal_5321cf432db830ccde08340f3551cacb6f46fc89f4bdaba1f1d07de53d21a9b1_prof);

    }

    // line 284
    public function block_form_enctype($context, array $blocks = array())
    {
        $__internal_17bb8f94dac6b7caa559de417dc1fa4a1f47e8f8acb62a3c5e6ae1ac5d226685 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17bb8f94dac6b7caa559de417dc1fa4a1f47e8f8acb62a3c5e6ae1ac5d226685->enter($__internal_17bb8f94dac6b7caa559de417dc1fa4a1f47e8f8acb62a3c5e6ae1ac5d226685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_enctype"));

        // line 285
        if ((isset($context["multipart"]) ? $context["multipart"] : $this->getContext($context, "multipart"))) {
            echo "enctype=\"multipart/form-data\"";
        }
        
        $__internal_17bb8f94dac6b7caa559de417dc1fa4a1f47e8f8acb62a3c5e6ae1ac5d226685->leave($__internal_17bb8f94dac6b7caa559de417dc1fa4a1f47e8f8acb62a3c5e6ae1ac5d226685_prof);

    }

    // line 288
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_221e6395c75e57f106da2733ba07721ed27a4a89b38b5c5072d9192e75097927 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_221e6395c75e57f106da2733ba07721ed27a4a89b38b5c5072d9192e75097927->enter($__internal_221e6395c75e57f106da2733ba07721ed27a4a89b38b5c5072d9192e75097927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 289
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 290
            echo "<ul>";
            // line 291
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 292
                echo "<li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 294
            echo "</ul>";
        }
        
        $__internal_221e6395c75e57f106da2733ba07721ed27a4a89b38b5c5072d9192e75097927->leave($__internal_221e6395c75e57f106da2733ba07721ed27a4a89b38b5c5072d9192e75097927_prof);

    }

    // line 298
    public function block_form_rest($context, array $blocks = array())
    {
        $__internal_dcf5ecb13eef96e955d7782af824bfb571831abfdc352bb6edab901d21f677e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcf5ecb13eef96e955d7782af824bfb571831abfdc352bb6edab901d21f677e0->enter($__internal_dcf5ecb13eef96e955d7782af824bfb571831abfdc352bb6edab901d21f677e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

        // line 299
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 300
            if ( !$this->getAttribute($context["child"], "rendered", array())) {
                // line 301
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row');
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_dcf5ecb13eef96e955d7782af824bfb571831abfdc352bb6edab901d21f677e0->leave($__internal_dcf5ecb13eef96e955d7782af824bfb571831abfdc352bb6edab901d21f677e0_prof);

    }

    // line 308
    public function block_form_rows($context, array $blocks = array())
    {
        $__internal_366816386f0a9da2508032ccb32a4f8661fbdd3135b4b9dba1a0eccba062abd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_366816386f0a9da2508032ccb32a4f8661fbdd3135b4b9dba1a0eccba062abd8->enter($__internal_366816386f0a9da2508032ccb32a4f8661fbdd3135b4b9dba1a0eccba062abd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        // line 309
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 310
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_366816386f0a9da2508032ccb32a4f8661fbdd3135b4b9dba1a0eccba062abd8->leave($__internal_366816386f0a9da2508032ccb32a4f8661fbdd3135b4b9dba1a0eccba062abd8_prof);

    }

    // line 314
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_f272ab4cdbf7dc0285babccfbb02014e93c839576906d402b94ce0a8103114d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f272ab4cdbf7dc0285babccfbb02014e93c839576906d402b94ce0a8103114d0->enter($__internal_f272ab4cdbf7dc0285babccfbb02014e93c839576906d402b94ce0a8103114d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 315
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")), "html", null, true);
        echo "\"";
        // line 316
        if ((isset($context["read_only"]) ? $context["read_only"] : $this->getContext($context, "read_only"))) {
            echo " readonly=\"readonly\"";
        }
        // line 317
        if ((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled"))) {
            echo " disabled=\"disabled\"";
        }
        // line 318
        if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
            echo " required=\"required\"";
        }
        // line 319
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            if ((("readonly" != $context["attrname"]) ||  !(isset($context["read_only"]) ? $context["read_only"] : $this->getContext($context, "read_only")))) {
                // line 320
                echo " ";
                // line 321
                if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                    // line 322
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                    echo "\"";
                } elseif ((                // line 323
$context["attrvalue"] === true)) {
                    // line 324
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "\"";
                } elseif ( !(                // line 325
$context["attrvalue"] === false)) {
                    // line 326
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                    echo "\"";
                }
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_f272ab4cdbf7dc0285babccfbb02014e93c839576906d402b94ce0a8103114d0->leave($__internal_f272ab4cdbf7dc0285babccfbb02014e93c839576906d402b94ce0a8103114d0_prof);

    }

    // line 331
    public function block_widget_container_attributes($context, array $blocks = array())
    {
        $__internal_a882dec8d845b2d6bfd7aa7411185c2be344c025820ba3e5f6fc6ff82d8ff176 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a882dec8d845b2d6bfd7aa7411185c2be344c025820ba3e5f6fc6ff82d8ff176->enter($__internal_a882dec8d845b2d6bfd7aa7411185c2be344c025820ba3e5f6fc6ff82d8ff176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        // line 332
        if ( !twig_test_empty((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))) {
            echo "id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\"";
        }
        // line 333
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 334
            echo " ";
            // line 335
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 336
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "\"";
            } elseif ((            // line 337
$context["attrvalue"] === true)) {
                // line 338
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 339
$context["attrvalue"] === false)) {
                // line 340
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_a882dec8d845b2d6bfd7aa7411185c2be344c025820ba3e5f6fc6ff82d8ff176->leave($__internal_a882dec8d845b2d6bfd7aa7411185c2be344c025820ba3e5f6fc6ff82d8ff176_prof);

    }

    // line 345
    public function block_button_attributes($context, array $blocks = array())
    {
        $__internal_93588464672b713ae388cd925ce73ffc1c82664a63fab0907181879a68c73366 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93588464672b713ae388cd925ce73ffc1c82664a63fab0907181879a68c73366->enter($__internal_93588464672b713ae388cd925ce73ffc1c82664a63fab0907181879a68c73366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        // line 346
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")), "html", null, true);
        echo "\"";
        if ((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled"))) {
            echo " disabled=\"disabled\"";
        }
        // line 347
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 348
            echo " ";
            // line 349
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 350
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "\"";
            } elseif ((            // line 351
$context["attrvalue"] === true)) {
                // line 352
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 353
$context["attrvalue"] === false)) {
                // line 354
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_93588464672b713ae388cd925ce73ffc1c82664a63fab0907181879a68c73366->leave($__internal_93588464672b713ae388cd925ce73ffc1c82664a63fab0907181879a68c73366_prof);

    }

    // line 359
    public function block_attributes($context, array $blocks = array())
    {
        $__internal_2186c81da3bf5b1b2a6d1492a7806ef2562ca600165233dd0419fa3f95701da4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2186c81da3bf5b1b2a6d1492a7806ef2562ca600165233dd0419fa3f95701da4->enter($__internal_2186c81da3bf5b1b2a6d1492a7806ef2562ca600165233dd0419fa3f95701da4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

        // line 360
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 361
            echo " ";
            // line 362
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 363
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "\"";
            } elseif ((            // line 364
$context["attrvalue"] === true)) {
                // line 365
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 366
$context["attrvalue"] === false)) {
                // line 367
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_2186c81da3bf5b1b2a6d1492a7806ef2562ca600165233dd0419fa3f95701da4->leave($__internal_2186c81da3bf5b1b2a6d1492a7806ef2562ca600165233dd0419fa3f95701da4_prof);

    }

    public function getTemplateName()
    {
        return "form_div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1271 => 367,  1269 => 366,  1264 => 365,  1262 => 364,  1257 => 363,  1255 => 362,  1253 => 361,  1249 => 360,  1243 => 359,  1228 => 354,  1226 => 353,  1221 => 352,  1219 => 351,  1214 => 350,  1212 => 349,  1210 => 348,  1206 => 347,  1197 => 346,  1191 => 345,  1176 => 340,  1174 => 339,  1169 => 338,  1167 => 337,  1162 => 336,  1160 => 335,  1158 => 334,  1154 => 333,  1148 => 332,  1142 => 331,  1126 => 326,  1124 => 325,  1119 => 324,  1117 => 323,  1112 => 322,  1110 => 321,  1108 => 320,  1103 => 319,  1099 => 318,  1095 => 317,  1091 => 316,  1085 => 315,  1079 => 314,  1068 => 310,  1064 => 309,  1058 => 308,  1046 => 301,  1044 => 300,  1040 => 299,  1034 => 298,  1026 => 294,  1018 => 292,  1014 => 291,  1012 => 290,  1010 => 289,  1004 => 288,  995 => 285,  989 => 284,  982 => 281,  979 => 279,  977 => 278,  971 => 277,  961 => 273,  959 => 272,  935 => 271,  932 => 269,  929 => 267,  927 => 266,  925 => 265,  919 => 264,  912 => 261,  910 => 260,  908 => 259,  902 => 258,  895 => 253,  889 => 252,  882 => 249,  880 => 248,  878 => 247,  872 => 246,  865 => 243,  863 => 242,  861 => 241,  859 => 240,  857 => 239,  851 => 238,  844 => 235,  838 => 230,  827 => 226,  804 => 222,  800 => 219,  797 => 216,  796 => 215,  795 => 214,  793 => 213,  791 => 212,  788 => 210,  786 => 209,  783 => 207,  781 => 206,  779 => 205,  773 => 204,  766 => 199,  764 => 198,  758 => 197,  751 => 194,  749 => 193,  743 => 192,  730 => 189,  726 => 186,  723 => 183,  722 => 182,  721 => 181,  719 => 180,  717 => 179,  711 => 178,  704 => 175,  702 => 174,  696 => 173,  689 => 170,  687 => 169,  681 => 168,  674 => 165,  672 => 164,  666 => 163,  658 => 160,  656 => 159,  650 => 158,  643 => 155,  641 => 154,  635 => 153,  628 => 150,  626 => 149,  620 => 148,  613 => 145,  607 => 144,  600 => 141,  598 => 140,  592 => 139,  585 => 136,  583 => 135,  577 => 133,  569 => 129,  559 => 128,  554 => 127,  552 => 126,  549 => 124,  547 => 123,  541 => 122,  533 => 118,  531 => 116,  530 => 115,  529 => 114,  528 => 113,  524 => 112,  521 => 110,  519 => 109,  513 => 108,  505 => 104,  503 => 103,  501 => 102,  499 => 101,  497 => 100,  493 => 99,  490 => 97,  488 => 96,  482 => 95,  465 => 92,  459 => 91,  442 => 88,  436 => 87,  403 => 82,  400 => 80,  398 => 79,  396 => 78,  391 => 77,  389 => 76,  372 => 75,  366 => 74,  359 => 71,  357 => 70,  355 => 69,  349 => 66,  347 => 65,  345 => 64,  343 => 63,  341 => 62,  332 => 60,  330 => 59,  323 => 58,  320 => 56,  318 => 55,  312 => 54,  305 => 51,  299 => 49,  297 => 48,  293 => 47,  289 => 46,  283 => 45,  275 => 41,  272 => 39,  270 => 38,  264 => 37,  253 => 34,  247 => 33,  240 => 30,  237 => 28,  235 => 27,  229 => 26,  222 => 23,  220 => 22,  218 => 21,  215 => 19,  213 => 18,  209 => 17,  203 => 16,  186 => 13,  184 => 12,  178 => 11,  170 => 7,  167 => 5,  165 => 4,  159 => 3,  152 => 359,  150 => 345,  148 => 331,  146 => 314,  144 => 308,  141 => 305,  139 => 298,  137 => 288,  135 => 284,  133 => 277,  131 => 264,  129 => 258,  127 => 252,  125 => 246,  123 => 238,  121 => 230,  119 => 226,  117 => 204,  115 => 197,  113 => 192,  111 => 178,  109 => 173,  107 => 168,  105 => 163,  103 => 158,  101 => 153,  99 => 148,  97 => 144,  95 => 139,  93 => 133,  91 => 122,  89 => 108,  87 => 95,  85 => 91,  83 => 87,  81 => 74,  79 => 54,  77 => 45,  75 => 37,  73 => 33,  71 => 26,  69 => 16,  67 => 11,  65 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Widgets #}

{%- block form_widget -%}
    {% if compound %}
        {{- block('form_widget_compound') -}}
    {% else %}
        {{- block('form_widget_simple') -}}
    {% endif %}
{%- endblock form_widget -%}

{%- block form_widget_simple -%}
    {%- set type = type|default('text') -%}
    <input type=\"{{ type }}\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %}/>
{%- endblock form_widget_simple -%}

{%- block form_widget_compound -%}
    <div {{ block('widget_container_attributes') }}>
        {%- if form.parent is empty -%}
            {{ form_errors(form) }}
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </div>
{%- endblock form_widget_compound -%}

{%- block collection_widget -%}
    {% if prototype is defined %}
        {%- set attr = attr|merge({'data-prototype': form_row(prototype) }) -%}
    {% endif %}
    {{- block('form_widget') -}}
{%- endblock collection_widget -%}

{%- block textarea_widget -%}
    <textarea {{ block('widget_attributes') }}>{{ value }}</textarea>
{%- endblock textarea_widget -%}

{%- block choice_widget -%}
    {% if expanded %}
        {{- block('choice_widget_expanded') -}}
    {% else %}
        {{- block('choice_widget_collapsed') -}}
    {% endif %}
{%- endblock choice_widget -%}

{%- block choice_widget_expanded -%}
    <div {{ block('widget_container_attributes') }}>
    {%- for child in form %}
        {{- form_widget(child) -}}
        {{- form_label(child, null, {translation_domain: choice_translation_domain}) -}}
    {% endfor -%}
    </div>
{%- endblock choice_widget_expanded -%}

{%- block choice_widget_collapsed -%}
    {%- if required and placeholder is none and not placeholder_in_choices and not multiple and (attr.size is not defined or attr.size <= 1) -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\"{% endif %}>
        {%- if placeholder is not none -%}
            <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ placeholder != '' ? placeholder|trans({}, translation_domain) }}</option>
        {%- endif -%}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('choice_widget_options') -}}
            {%- if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif -%}
        {%- endif -%}
        {%- set options = choices -%}
        {{- block('choice_widget_options') -}}
    </select>
{%- endblock choice_widget_collapsed -%}

{%- block choice_widget_options -%}
    {% for group_label, choice in options %}
        {%- if choice is iterable -%}
            <optgroup label=\"{{ choice_translation_domain is same as(false) ? group_label : group_label|trans({}, choice_translation_domain) }}\">
                {% set options = choice %}
                {{- block('choice_widget_options') -}}
            </optgroup>
        {%- else -%}
            <option value=\"{{ choice.value }}\"{% if choice.attr %} {% set attr = choice.attr %}{{ block('attributes') }}{% endif %}{% if choice is selectedchoice(value) %} selected=\"selected\"{% endif %}>{{ choice_translation_domain is same as(false) ? choice.label : choice.label|trans({}, choice_translation_domain) }}</option>
        {%- endif -%}
    {% endfor %}
{%- endblock choice_widget_options -%}

{%- block checkbox_widget -%}
    <input type=\"checkbox\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{%- endblock checkbox_widget -%}

{%- block radio_widget -%}
    <input type=\"radio\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{%- endblock radio_widget -%}

{%- block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date) -}}
            {{- form_widget(form.time) -}}
        </div>
    {%- endif -%}
{%- endblock datetime_widget -%}

{%- block date_widget -%}
    {%- if widget == 'single_text' -%}
        {{ block('form_widget_simple') }}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- date_pattern|replace({
                '{{ year }}':  form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}':   form_widget(form.day),
            })|raw -}}
        </div>
    {%- endif -%}
{%- endblock date_widget -%}

{%- block time_widget -%}
    {%- if widget == 'single_text' -%}
        {{ block('form_widget_simple') }}
    {%- else -%}
        {%- set vars = widget == 'text' ? { 'attr': { 'size': 1 }} : {} -%}
        <div {{ block('widget_container_attributes') }}>
            {{ form_widget(form.hour, vars) }}{% if with_minutes %}:{{ form_widget(form.minute, vars) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second, vars) }}{% endif %}
        </div>
    {%- endif -%}
{%- endblock time_widget -%}

{%- block number_widget -%}
    {# type=\"number\" doesn't work with floats #}
    {%- set type = type|default('text') -%}
    {{ block('form_widget_simple') }}
{%- endblock number_widget -%}

{%- block integer_widget -%}
    {%- set type = type|default('number') -%}
    {{ block('form_widget_simple') }}
{%- endblock integer_widget -%}

{%- block money_widget -%}
    {{ money_pattern|replace({ '{{ widget }}': block('form_widget_simple') })|raw }}
{%- endblock money_widget -%}

{%- block url_widget -%}
    {%- set type = type|default('url') -%}
    {{ block('form_widget_simple') }}
{%- endblock url_widget -%}

{%- block search_widget -%}
    {%- set type = type|default('search') -%}
    {{ block('form_widget_simple') }}
{%- endblock search_widget -%}

{%- block percent_widget -%}
    {%- set type = type|default('text') -%}
    {{ block('form_widget_simple') }} %
{%- endblock percent_widget -%}

{%- block password_widget -%}
    {%- set type = type|default('password') -%}
    {{ block('form_widget_simple') }}
{%- endblock password_widget -%}

{%- block hidden_widget -%}
    {%- set type = type|default('hidden') -%}
    {{ block('form_widget_simple') }}
{%- endblock hidden_widget -%}

{%- block email_widget -%}
    {%- set type = type|default('email') -%}
    {{ block('form_widget_simple') }}
{%- endblock email_widget -%}

{%- block button_widget -%}
    {%- if label is empty -%}
        {%- if label_format is not empty -%}
            {% set label = label_format|replace({
                '%name%': name,
                '%id%': id,
            }) %}
        {%- else -%}
            {% set label = name|humanize %}
        {%- endif -%}
    {%- endif -%}
    <button type=\"{{ type|default('button') }}\" {{ block('button_attributes') }}>{{ label|trans({}, translation_domain) }}</button>
{%- endblock button_widget -%}

{%- block submit_widget -%}
    {%- set type = type|default('submit') -%}
    {{ block('button_widget') }}
{%- endblock submit_widget -%}

{%- block reset_widget -%}
    {%- set type = type|default('reset') -%}
    {{ block('button_widget') }}
{%- endblock reset_widget -%}

{# Labels #}

{%- block form_label -%}
    {% if label is not same as(false) -%}
        {% if not compound -%}
            {% set label_attr = label_attr|merge({'for': id}) %}
        {%- endif -%}
        {% if required -%}
            {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}
        {%- endif -%}
        {% if label is empty -%}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</label>
    {%- endif -%}
{%- endblock form_label -%}

{%- block button_label -%}{%- endblock -%}

{# Rows #}

{%- block repeated_row -%}
    {#
    No need to render the errors here, as all errors are mapped
    to the first child (see RepeatedTypeValidatorExtension).
    #}
    {{- block('form_rows') -}}
{%- endblock repeated_row -%}

{%- block form_row -%}
    <div>
        {{- form_label(form) -}}
        {{- form_errors(form) -}}
        {{- form_widget(form) -}}
    </div>
{%- endblock form_row -%}

{%- block button_row -%}
    <div>
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row -%}

{%- block hidden_row -%}
    {{ form_widget(form) }}
{%- endblock hidden_row -%}

{# Misc #}

{%- block form -%}
    {{ form_start(form) }}
        {{- form_widget(form) -}}
    {{ form_end(form) }}
{%- endblock form -%}

{%- block form_start -%}
    {% set method = method|upper %}
    {%- if method in [\"GET\", \"POST\"] -%}
        {% set form_method = method %}
    {%- else -%}
        {% set form_method = \"POST\" %}
    {%- endif -%}
    <form name=\"{{ name }}\" method=\"{{ form_method|lower }}\" action=\"{{ action }}\"{% for attrname, attrvalue in attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}{% if multipart %} enctype=\"multipart/form-data\"{% endif %}>
    {%- if form_method != method -%}
        <input type=\"hidden\" name=\"_method\" value=\"{{ method }}\" />
    {%- endif -%}
{%- endblock form_start -%}

{%- block form_end -%}
    {%- if not render_rest is defined or render_rest -%}
        {{ form_rest(form) }}
    {%- endif -%}
    </form>
{%- endblock form_end -%}

{%- block form_enctype -%}
    {% if multipart %}enctype=\"multipart/form-data\"{% endif %}
{%- endblock form_enctype -%}

{%- block form_errors -%}
    {%- if errors|length > 0 -%}
    <ul>
        {%- for error in errors -%}
            <li>{{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {%- endif -%}
{%- endblock form_errors -%}

{%- block form_rest -%}
    {% for child in form -%}
        {% if not child.rendered %}
            {{- form_row(child) -}}
        {% endif %}
    {%- endfor %}
{% endblock form_rest %}

{# Support #}

{%- block form_rows -%}
    {% for child in form %}
        {{- form_row(child) -}}
    {% endfor %}
{%- endblock form_rows -%}

{%- block widget_attributes -%}
    id=\"{{ id }}\" name=\"{{ full_name }}\"
    {%- if read_only %} readonly=\"readonly\"{% endif -%}
    {%- if disabled %} disabled=\"disabled\"{% endif -%}
    {%- if required %} required=\"required\"{% endif -%}
    {%- for attrname, attrvalue in attr if 'readonly' != attrname or not read_only -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock widget_attributes -%}

{%- block widget_container_attributes -%}
    {%- if id is not empty %}id=\"{{ id }}\"{% endif -%}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock widget_container_attributes -%}

{%- block button_attributes -%}
    id=\"{{ id }}\" name=\"{{ full_name }}\"{% if disabled %} disabled=\"disabled\"{% endif -%}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock button_attributes -%}

{% block attributes -%}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock attributes -%}
", "form_div_layout.html.twig", "C:\\wamp\\www\\GestionDeFilm\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\form_div_layout.html.twig");
    }
}
