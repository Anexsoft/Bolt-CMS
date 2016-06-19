<?php

/* form_div_layout.html.twig */
class __TwigTemplate_18c7edddb2ed05ba607cfba014f35087caea68eb65ecb6e48b1246d60bae7bc6 extends Twig_Template
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
            'range_widget' => array($this, 'block_range_widget'),
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
        $__internal_2d16ae59d43bbf96ae2230215bde9ec0f5875026c06177000e22829404bad63f = $this->env->getExtension("native_profiler");
        $__internal_2d16ae59d43bbf96ae2230215bde9ec0f5875026c06177000e22829404bad63f->enter($__internal_2d16ae59d43bbf96ae2230215bde9ec0f5875026c06177000e22829404bad63f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_div_layout.html.twig"));

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
        // line 88
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 92
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 96
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 109
        $this->displayBlock('date_widget', $context, $blocks);
        // line 123
        $this->displayBlock('time_widget', $context, $blocks);
        // line 134
        $this->displayBlock('number_widget', $context, $blocks);
        // line 140
        $this->displayBlock('integer_widget', $context, $blocks);
        // line 145
        $this->displayBlock('money_widget', $context, $blocks);
        // line 149
        $this->displayBlock('url_widget', $context, $blocks);
        // line 154
        $this->displayBlock('search_widget', $context, $blocks);
        // line 159
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 164
        $this->displayBlock('password_widget', $context, $blocks);
        // line 169
        $this->displayBlock('hidden_widget', $context, $blocks);
        // line 174
        $this->displayBlock('email_widget', $context, $blocks);
        // line 179
        $this->displayBlock('range_widget', $context, $blocks);
        // line 184
        $this->displayBlock('button_widget', $context, $blocks);
        // line 198
        $this->displayBlock('submit_widget', $context, $blocks);
        // line 203
        $this->displayBlock('reset_widget', $context, $blocks);
        // line 210
        $this->displayBlock('form_label', $context, $blocks);
        // line 232
        $this->displayBlock('button_label', $context, $blocks);
        // line 236
        $this->displayBlock('repeated_row', $context, $blocks);
        // line 244
        $this->displayBlock('form_row', $context, $blocks);
        // line 252
        $this->displayBlock('button_row', $context, $blocks);
        // line 258
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 264
        $this->displayBlock('form', $context, $blocks);
        // line 270
        $this->displayBlock('form_start', $context, $blocks);
        // line 283
        $this->displayBlock('form_end', $context, $blocks);
        // line 290
        $this->displayBlock('form_enctype', $context, $blocks);
        // line 294
        $this->displayBlock('form_errors', $context, $blocks);
        // line 304
        $this->displayBlock('form_rest', $context, $blocks);
        // line 311
        echo "
";
        // line 314
        $this->displayBlock('form_rows', $context, $blocks);
        // line 320
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 337
        $this->displayBlock('widget_container_attributes', $context, $blocks);
        // line 351
        $this->displayBlock('button_attributes', $context, $blocks);
        // line 365
        $this->displayBlock('attributes', $context, $blocks);
        
        $__internal_2d16ae59d43bbf96ae2230215bde9ec0f5875026c06177000e22829404bad63f->leave($__internal_2d16ae59d43bbf96ae2230215bde9ec0f5875026c06177000e22829404bad63f_prof);

    }

    // line 3
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_d7bb9137a6752710a6a4726c851905ef5219d85fe20bef860f0b779c1160cbbb = $this->env->getExtension("native_profiler");
        $__internal_d7bb9137a6752710a6a4726c851905ef5219d85fe20bef860f0b779c1160cbbb->enter($__internal_d7bb9137a6752710a6a4726c851905ef5219d85fe20bef860f0b779c1160cbbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 4
        if ((isset($context["compound"]) ? $context["compound"] : null)) {
            // line 5
            $this->displayBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 7
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_d7bb9137a6752710a6a4726c851905ef5219d85fe20bef860f0b779c1160cbbb->leave($__internal_d7bb9137a6752710a6a4726c851905ef5219d85fe20bef860f0b779c1160cbbb_prof);

    }

    // line 11
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_b12852257a6b40eb1e6845b6701d19162f44d6a31b95c447d5e39bbdff520c60 = $this->env->getExtension("native_profiler");
        $__internal_b12852257a6b40eb1e6845b6701d19162f44d6a31b95c447d5e39bbdff520c60->enter($__internal_b12852257a6b40eb1e6845b6701d19162f44d6a31b95c447d5e39bbdff520c60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 12
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "text")) : ("text"));
        // line 13
        echo "<input type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : null))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\" ";
        }
        echo "/>";
        
        $__internal_b12852257a6b40eb1e6845b6701d19162f44d6a31b95c447d5e39bbdff520c60->leave($__internal_b12852257a6b40eb1e6845b6701d19162f44d6a31b95c447d5e39bbdff520c60_prof);

    }

    // line 16
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_e9205c69692c8934ba49bb4669a802036c65470657038cc6dc3d9128df098846 = $this->env->getExtension("native_profiler");
        $__internal_e9205c69692c8934ba49bb4669a802036c65470657038cc6dc3d9128df098846->enter($__internal_e9205c69692c8934ba49bb4669a802036c65470657038cc6dc3d9128df098846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 17
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 18
        if (twig_test_empty($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array()))) {
            // line 19
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        }
        // line 21
        $this->displayBlock("form_rows", $context, $blocks);
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        // line 23
        echo "</div>";
        
        $__internal_e9205c69692c8934ba49bb4669a802036c65470657038cc6dc3d9128df098846->leave($__internal_e9205c69692c8934ba49bb4669a802036c65470657038cc6dc3d9128df098846_prof);

    }

    // line 26
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_651679e8f42519f91ddc250607a2f635547aa8269904fce9dfcb39e48f70fedb = $this->env->getExtension("native_profiler");
        $__internal_651679e8f42519f91ddc250607a2f635547aa8269904fce9dfcb39e48f70fedb->enter($__internal_651679e8f42519f91ddc250607a2f635547aa8269904fce9dfcb39e48f70fedb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 27
        if (array_key_exists("prototype", $context)) {
            // line 28
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("data-prototype" => $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["prototype"]) ? $context["prototype"] : null), 'row')));
        }
        // line 30
        $this->displayBlock("form_widget", $context, $blocks);
        
        $__internal_651679e8f42519f91ddc250607a2f635547aa8269904fce9dfcb39e48f70fedb->leave($__internal_651679e8f42519f91ddc250607a2f635547aa8269904fce9dfcb39e48f70fedb_prof);

    }

    // line 33
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_f40f3d3060022f5dc8c56f3f450100740f2c9e0f943461afb36eec82e8359984 = $this->env->getExtension("native_profiler");
        $__internal_f40f3d3060022f5dc8c56f3f450100740f2c9e0f943461afb36eec82e8359984->enter($__internal_f40f3d3060022f5dc8c56f3f450100740f2c9e0f943461afb36eec82e8359984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 34
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
        echo "</textarea>";
        
        $__internal_f40f3d3060022f5dc8c56f3f450100740f2c9e0f943461afb36eec82e8359984->leave($__internal_f40f3d3060022f5dc8c56f3f450100740f2c9e0f943461afb36eec82e8359984_prof);

    }

    // line 37
    public function block_choice_widget($context, array $blocks = array())
    {
        $__internal_3d3f34bfe92f906fce9663fdf129a91f65b8125b3f2f21f164d7f10f446c5c45 = $this->env->getExtension("native_profiler");
        $__internal_3d3f34bfe92f906fce9663fdf129a91f65b8125b3f2f21f164d7f10f446c5c45->enter($__internal_3d3f34bfe92f906fce9663fdf129a91f65b8125b3f2f21f164d7f10f446c5c45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        // line 38
        if ((isset($context["expanded"]) ? $context["expanded"] : null)) {
            // line 39
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
        } else {
            // line 41
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
        }
        
        $__internal_3d3f34bfe92f906fce9663fdf129a91f65b8125b3f2f21f164d7f10f446c5c45->leave($__internal_3d3f34bfe92f906fce9663fdf129a91f65b8125b3f2f21f164d7f10f446c5c45_prof);

    }

    // line 45
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_4e55e62f8ec7ae5e9936ce9108615659c4ca48a6a14f22f11c4dddf744c02034 = $this->env->getExtension("native_profiler");
        $__internal_4e55e62f8ec7ae5e9936ce9108615659c4ca48a6a14f22f11c4dddf744c02034->enter($__internal_4e55e62f8ec7ae5e9936ce9108615659c4ca48a6a14f22f11c4dddf744c02034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 46
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 48
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget');
            // line 49
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'label', array("translation_domain" => (isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : null)));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "</div>";
        
        $__internal_4e55e62f8ec7ae5e9936ce9108615659c4ca48a6a14f22f11c4dddf744c02034->leave($__internal_4e55e62f8ec7ae5e9936ce9108615659c4ca48a6a14f22f11c4dddf744c02034_prof);

    }

    // line 54
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_431fc873a3ca98a466bfe5391664363ddd11f4a1a523d7880a2b96b73e8cb676 = $this->env->getExtension("native_profiler");
        $__internal_431fc873a3ca98a466bfe5391664363ddd11f4a1a523d7880a2b96b73e8cb676->enter($__internal_431fc873a3ca98a466bfe5391664363ddd11f4a1a523d7880a2b96b73e8cb676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 55
        if ((((((isset($context["required"]) ? $context["required"] : null) && (null === (isset($context["placeholder"]) ? $context["placeholder"] : null))) &&  !(isset($context["placeholder_in_choices"]) ? $context["placeholder_in_choices"] : null)) &&  !(isset($context["multiple"]) ? $context["multiple"] : null)) && ( !$this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "size", array(), "any", true, true) || ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "size", array()) <= 1)))) {
            // line 56
            $context["required"] = false;
        }
        // line 58
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 59
        if ( !(null === (isset($context["placeholder"]) ? $context["placeholder"] : null))) {
            // line 60
            echo "<option value=\"\"";
            if (((isset($context["required"]) ? $context["required"] : null) && twig_test_empty((isset($context["value"]) ? $context["value"] : null)))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["placeholder"]) ? $context["placeholder"] : null) != "")) ? (((((isset($context["translation_domain"]) ? $context["translation_domain"] : null) === false)) ? ((isset($context["placeholder"]) ? $context["placeholder"] : null)) : ($this->env->getExtension('translator')->trans((isset($context["placeholder"]) ? $context["placeholder"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null))))) : ("")), "html", null, true);
            echo "</option>";
        }
        // line 62
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) ? $context["preferred_choices"] : null)) > 0)) {
            // line 63
            $context["options"] = (isset($context["preferred_choices"]) ? $context["preferred_choices"] : null);
            // line 64
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 65
            if (((twig_length_filter($this->env, (isset($context["choices"]) ? $context["choices"] : null)) > 0) &&  !(null === (isset($context["separator"]) ? $context["separator"] : null)))) {
                // line 66
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) ? $context["separator"] : null), "html", null, true);
                echo "</option>";
            }
        }
        // line 69
        $context["options"] = (isset($context["choices"]) ? $context["choices"] : null);
        // line 70
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 71
        echo "</select>";
        
        $__internal_431fc873a3ca98a466bfe5391664363ddd11f4a1a523d7880a2b96b73e8cb676->leave($__internal_431fc873a3ca98a466bfe5391664363ddd11f4a1a523d7880a2b96b73e8cb676_prof);

    }

    // line 74
    public function block_choice_widget_options($context, array $blocks = array())
    {
        $__internal_e783e29480386716de50ffdd9898ddd3e836319d9ad6af9b2e2bfe28d50444f6 = $this->env->getExtension("native_profiler");
        $__internal_e783e29480386716de50ffdd9898ddd3e836319d9ad6af9b2e2bfe28d50444f6->enter($__internal_e783e29480386716de50ffdd9898ddd3e836319d9ad6af9b2e2bfe28d50444f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
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
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : null) === false)) ? ($context["group_label"]) : ($this->env->getExtension('translator')->trans($context["group_label"], array(), (isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : null)))), "html", null, true);
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
                $context["attr"] = $this->getAttribute($context["choice"], "attr", array());
                // line 83
                echo "            <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "value", array()), "html", null, true);
                echo "\" ";
                $this->displayBlock("attributes", $context, $blocks);
                if ($this->env->getExtension('form')->isSelectedChoice($context["choice"], (isset($context["value"]) ? $context["value"] : null))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : null) === false)) ? ($this->getAttribute($context["choice"], "label", array())) : ($this->env->getExtension('translator')->trans($this->getAttribute($context["choice"], "label", array()), array(), (isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : null)))), "html", null, true);
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
        
        $__internal_e783e29480386716de50ffdd9898ddd3e836319d9ad6af9b2e2bfe28d50444f6->leave($__internal_e783e29480386716de50ffdd9898ddd3e836319d9ad6af9b2e2bfe28d50444f6_prof);

    }

    // line 88
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_a6b4c9aaa6b3bcb97de4139b19f387760f83a426cab115639aed8ec2428afd95 = $this->env->getExtension("native_profiler");
        $__internal_a6b4c9aaa6b3bcb97de4139b19f387760f83a426cab115639aed8ec2428afd95->enter($__internal_a6b4c9aaa6b3bcb97de4139b19f387760f83a426cab115639aed8ec2428afd95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 89
        echo "<input type=\"checkbox\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_a6b4c9aaa6b3bcb97de4139b19f387760f83a426cab115639aed8ec2428afd95->leave($__internal_a6b4c9aaa6b3bcb97de4139b19f387760f83a426cab115639aed8ec2428afd95_prof);

    }

    // line 92
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_4e9d2b63ddb4c5c5bff81efebe6f07c6a30c75e5e7f16e4a55de6e04fae287fd = $this->env->getExtension("native_profiler");
        $__internal_4e9d2b63ddb4c5c5bff81efebe6f07c6a30c75e5e7f16e4a55de6e04fae287fd->enter($__internal_4e9d2b63ddb4c5c5bff81efebe6f07c6a30c75e5e7f16e4a55de6e04fae287fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 93
        echo "<input type=\"radio\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_4e9d2b63ddb4c5c5bff81efebe6f07c6a30c75e5e7f16e4a55de6e04fae287fd->leave($__internal_4e9d2b63ddb4c5c5bff81efebe6f07c6a30c75e5e7f16e4a55de6e04fae287fd_prof);

    }

    // line 96
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_607443b4ce35bd3dd915512e04ca33d5b620d579d7e6b0bdc662a8826cd76cb5 = $this->env->getExtension("native_profiler");
        $__internal_607443b4ce35bd3dd915512e04ca33d5b620d579d7e6b0bdc662a8826cd76cb5->enter($__internal_607443b4ce35bd3dd915512e04ca33d5b620d579d7e6b0bdc662a8826cd76cb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 97
        if (((isset($context["widget"]) ? $context["widget"] : null) == "single_text")) {
            // line 98
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 100
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 101
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "date", array()), 'errors');
            // line 102
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "time", array()), 'errors');
            // line 103
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "date", array()), 'widget');
            // line 104
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "time", array()), 'widget');
            // line 105
            echo "</div>";
        }
        
        $__internal_607443b4ce35bd3dd915512e04ca33d5b620d579d7e6b0bdc662a8826cd76cb5->leave($__internal_607443b4ce35bd3dd915512e04ca33d5b620d579d7e6b0bdc662a8826cd76cb5_prof);

    }

    // line 109
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_b849780032472fecb3acc71e2e88f1997f8718e56a4aace2629d88722192f85a = $this->env->getExtension("native_profiler");
        $__internal_b849780032472fecb3acc71e2e88f1997f8718e56a4aace2629d88722192f85a->enter($__internal_b849780032472fecb3acc71e2e88f1997f8718e56a4aace2629d88722192f85a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 110
        if (((isset($context["widget"]) ? $context["widget"] : null) == "single_text")) {
            // line 111
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 113
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 114
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : null), array("{{ year }}" =>             // line 115
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "year", array()), 'widget'), "{{ month }}" =>             // line 116
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "month", array()), 'widget'), "{{ day }}" =>             // line 117
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "day", array()), 'widget')));
            // line 119
            echo "</div>";
        }
        
        $__internal_b849780032472fecb3acc71e2e88f1997f8718e56a4aace2629d88722192f85a->leave($__internal_b849780032472fecb3acc71e2e88f1997f8718e56a4aace2629d88722192f85a_prof);

    }

    // line 123
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_a73e08fe93579aae8efc8e8fbbf866bcf6aa93e55b24b1ae8dd4a0a89f7f2e8c = $this->env->getExtension("native_profiler");
        $__internal_a73e08fe93579aae8efc8e8fbbf866bcf6aa93e55b24b1ae8dd4a0a89f7f2e8c->enter($__internal_a73e08fe93579aae8efc8e8fbbf866bcf6aa93e55b24b1ae8dd4a0a89f7f2e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 124
        if (((isset($context["widget"]) ? $context["widget"] : null) == "single_text")) {
            // line 125
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 127
            $context["vars"] = ((((isset($context["widget"]) ? $context["widget"] : null) == "text")) ? (array("attr" => array("size" => 1))) : (array()));
            // line 128
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 129
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "hour", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : null));
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : null)) {
                echo ":";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "minute", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : null));
            }
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : null)) {
                echo ":";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "second", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : null));
            }
            // line 130
            echo "        </div>";
        }
        
        $__internal_a73e08fe93579aae8efc8e8fbbf866bcf6aa93e55b24b1ae8dd4a0a89f7f2e8c->leave($__internal_a73e08fe93579aae8efc8e8fbbf866bcf6aa93e55b24b1ae8dd4a0a89f7f2e8c_prof);

    }

    // line 134
    public function block_number_widget($context, array $blocks = array())
    {
        $__internal_ea225bf1b75db840ae3edd64356c525a3db4b00add9f08a7c9cdd0750dcfe34b = $this->env->getExtension("native_profiler");
        $__internal_ea225bf1b75db840ae3edd64356c525a3db4b00add9f08a7c9cdd0750dcfe34b->enter($__internal_ea225bf1b75db840ae3edd64356c525a3db4b00add9f08a7c9cdd0750dcfe34b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        // line 136
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "text")) : ("text"));
        // line 137
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_ea225bf1b75db840ae3edd64356c525a3db4b00add9f08a7c9cdd0750dcfe34b->leave($__internal_ea225bf1b75db840ae3edd64356c525a3db4b00add9f08a7c9cdd0750dcfe34b_prof);

    }

    // line 140
    public function block_integer_widget($context, array $blocks = array())
    {
        $__internal_4f6fe5461ddb99816a9127f2a49ba29784190fb89b84958bc15d9acc2a9063d7 = $this->env->getExtension("native_profiler");
        $__internal_4f6fe5461ddb99816a9127f2a49ba29784190fb89b84958bc15d9acc2a9063d7->enter($__internal_4f6fe5461ddb99816a9127f2a49ba29784190fb89b84958bc15d9acc2a9063d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        // line 141
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "number")) : ("number"));
        // line 142
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_4f6fe5461ddb99816a9127f2a49ba29784190fb89b84958bc15d9acc2a9063d7->leave($__internal_4f6fe5461ddb99816a9127f2a49ba29784190fb89b84958bc15d9acc2a9063d7_prof);

    }

    // line 145
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_7ffd0780c414f4fe34215eeb588e565142e918f89b118face765d4893a947c72 = $this->env->getExtension("native_profiler");
        $__internal_7ffd0780c414f4fe34215eeb588e565142e918f89b118face765d4893a947c72->enter($__internal_7ffd0780c414f4fe34215eeb588e565142e918f89b118face765d4893a947c72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 146
        echo twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : null), array("{{ widget }}" => $this->renderBlock("form_widget_simple", $context, $blocks)));
        
        $__internal_7ffd0780c414f4fe34215eeb588e565142e918f89b118face765d4893a947c72->leave($__internal_7ffd0780c414f4fe34215eeb588e565142e918f89b118face765d4893a947c72_prof);

    }

    // line 149
    public function block_url_widget($context, array $blocks = array())
    {
        $__internal_baf4de97e54b0e1689a8717e268956bda24c0e9cbb216c8473cdc41dfe4096bc = $this->env->getExtension("native_profiler");
        $__internal_baf4de97e54b0e1689a8717e268956bda24c0e9cbb216c8473cdc41dfe4096bc->enter($__internal_baf4de97e54b0e1689a8717e268956bda24c0e9cbb216c8473cdc41dfe4096bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        // line 150
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "url")) : ("url"));
        // line 151
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_baf4de97e54b0e1689a8717e268956bda24c0e9cbb216c8473cdc41dfe4096bc->leave($__internal_baf4de97e54b0e1689a8717e268956bda24c0e9cbb216c8473cdc41dfe4096bc_prof);

    }

    // line 154
    public function block_search_widget($context, array $blocks = array())
    {
        $__internal_f12b348cdf59829cd0362598ffa6498b126d921e05b15a9df3a6d5aa26b6d6ad = $this->env->getExtension("native_profiler");
        $__internal_f12b348cdf59829cd0362598ffa6498b126d921e05b15a9df3a6d5aa26b6d6ad->enter($__internal_f12b348cdf59829cd0362598ffa6498b126d921e05b15a9df3a6d5aa26b6d6ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        // line 155
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "search")) : ("search"));
        // line 156
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_f12b348cdf59829cd0362598ffa6498b126d921e05b15a9df3a6d5aa26b6d6ad->leave($__internal_f12b348cdf59829cd0362598ffa6498b126d921e05b15a9df3a6d5aa26b6d6ad_prof);

    }

    // line 159
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_be61f3374d9869cea406f7b3eee787bebedee60fd0fa0788d2c0108838bec5c7 = $this->env->getExtension("native_profiler");
        $__internal_be61f3374d9869cea406f7b3eee787bebedee60fd0fa0788d2c0108838bec5c7->enter($__internal_be61f3374d9869cea406f7b3eee787bebedee60fd0fa0788d2c0108838bec5c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 160
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "text")) : ("text"));
        // line 161
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo " %";
        
        $__internal_be61f3374d9869cea406f7b3eee787bebedee60fd0fa0788d2c0108838bec5c7->leave($__internal_be61f3374d9869cea406f7b3eee787bebedee60fd0fa0788d2c0108838bec5c7_prof);

    }

    // line 164
    public function block_password_widget($context, array $blocks = array())
    {
        $__internal_2073b2146bc0df04c3d29a4e526102008bcade89997aac69d6f18ecbbb6bbda9 = $this->env->getExtension("native_profiler");
        $__internal_2073b2146bc0df04c3d29a4e526102008bcade89997aac69d6f18ecbbb6bbda9->enter($__internal_2073b2146bc0df04c3d29a4e526102008bcade89997aac69d6f18ecbbb6bbda9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        // line 165
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "password")) : ("password"));
        // line 166
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_2073b2146bc0df04c3d29a4e526102008bcade89997aac69d6f18ecbbb6bbda9->leave($__internal_2073b2146bc0df04c3d29a4e526102008bcade89997aac69d6f18ecbbb6bbda9_prof);

    }

    // line 169
    public function block_hidden_widget($context, array $blocks = array())
    {
        $__internal_74829eaea1eefc9520f49fd61b6b28bfc62deed13dafb11af307ce632887a95f = $this->env->getExtension("native_profiler");
        $__internal_74829eaea1eefc9520f49fd61b6b28bfc62deed13dafb11af307ce632887a95f->enter($__internal_74829eaea1eefc9520f49fd61b6b28bfc62deed13dafb11af307ce632887a95f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        // line 170
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "hidden")) : ("hidden"));
        // line 171
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_74829eaea1eefc9520f49fd61b6b28bfc62deed13dafb11af307ce632887a95f->leave($__internal_74829eaea1eefc9520f49fd61b6b28bfc62deed13dafb11af307ce632887a95f_prof);

    }

    // line 174
    public function block_email_widget($context, array $blocks = array())
    {
        $__internal_174d1dbcbf90c2674f55a9b6c43e05a853195085e9df158560ec1b913df0da6e = $this->env->getExtension("native_profiler");
        $__internal_174d1dbcbf90c2674f55a9b6c43e05a853195085e9df158560ec1b913df0da6e->enter($__internal_174d1dbcbf90c2674f55a9b6c43e05a853195085e9df158560ec1b913df0da6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        // line 175
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "email")) : ("email"));
        // line 176
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_174d1dbcbf90c2674f55a9b6c43e05a853195085e9df158560ec1b913df0da6e->leave($__internal_174d1dbcbf90c2674f55a9b6c43e05a853195085e9df158560ec1b913df0da6e_prof);

    }

    // line 179
    public function block_range_widget($context, array $blocks = array())
    {
        $__internal_74dda89e6a93e78c2c24c84d99b9dcc3c58d1814724eb4d3bb9385ebbfa4354b = $this->env->getExtension("native_profiler");
        $__internal_74dda89e6a93e78c2c24c84d99b9dcc3c58d1814724eb4d3bb9385ebbfa4354b->enter($__internal_74dda89e6a93e78c2c24c84d99b9dcc3c58d1814724eb4d3bb9385ebbfa4354b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "range_widget"));

        // line 180
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "range")) : ("range"));
        // line 181
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_74dda89e6a93e78c2c24c84d99b9dcc3c58d1814724eb4d3bb9385ebbfa4354b->leave($__internal_74dda89e6a93e78c2c24c84d99b9dcc3c58d1814724eb4d3bb9385ebbfa4354b_prof);

    }

    // line 184
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_df4d546a79af59706faaca8ec2a6406b2624d2f23afcb2731015225dcaa12ff0 = $this->env->getExtension("native_profiler");
        $__internal_df4d546a79af59706faaca8ec2a6406b2624d2f23afcb2731015225dcaa12ff0->enter($__internal_df4d546a79af59706faaca8ec2a6406b2624d2f23afcb2731015225dcaa12ff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 185
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : null))) {
            // line 186
            if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : null))) {
                // line 187
                $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : null), array("%name%" =>                 // line 188
(isset($context["name"]) ? $context["name"] : null), "%id%" =>                 // line 189
(isset($context["id"]) ? $context["id"] : null)));
            } else {
                // line 192
                $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : null));
            }
        }
        // line 195
        echo "<button type=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : null) === false)) ? ((isset($context["label"]) ? $context["label"] : null)) : ($this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)))), "html", null, true);
        echo "</button>";
        
        $__internal_df4d546a79af59706faaca8ec2a6406b2624d2f23afcb2731015225dcaa12ff0->leave($__internal_df4d546a79af59706faaca8ec2a6406b2624d2f23afcb2731015225dcaa12ff0_prof);

    }

    // line 198
    public function block_submit_widget($context, array $blocks = array())
    {
        $__internal_c96f001d627e96b70a8b9950ec07e571fa9244b4b7fd3778fd08cffc490ea937 = $this->env->getExtension("native_profiler");
        $__internal_c96f001d627e96b70a8b9950ec07e571fa9244b4b7fd3778fd08cffc490ea937->enter($__internal_c96f001d627e96b70a8b9950ec07e571fa9244b4b7fd3778fd08cffc490ea937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        // line 199
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "submit")) : ("submit"));
        // line 200
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_c96f001d627e96b70a8b9950ec07e571fa9244b4b7fd3778fd08cffc490ea937->leave($__internal_c96f001d627e96b70a8b9950ec07e571fa9244b4b7fd3778fd08cffc490ea937_prof);

    }

    // line 203
    public function block_reset_widget($context, array $blocks = array())
    {
        $__internal_f799d5e66d14b049158ae7773aa50b36a39fdb9112128cae46af049e6e63fb6a = $this->env->getExtension("native_profiler");
        $__internal_f799d5e66d14b049158ae7773aa50b36a39fdb9112128cae46af049e6e63fb6a->enter($__internal_f799d5e66d14b049158ae7773aa50b36a39fdb9112128cae46af049e6e63fb6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        // line 204
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "reset")) : ("reset"));
        // line 205
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_f799d5e66d14b049158ae7773aa50b36a39fdb9112128cae46af049e6e63fb6a->leave($__internal_f799d5e66d14b049158ae7773aa50b36a39fdb9112128cae46af049e6e63fb6a_prof);

    }

    // line 210
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_5f84c8a5795174327eb0e907de93de3fb15088412070211c4dc374339523ccb5 = $this->env->getExtension("native_profiler");
        $__internal_5f84c8a5795174327eb0e907de93de3fb15088412070211c4dc374339523ccb5->enter($__internal_5f84c8a5795174327eb0e907de93de3fb15088412070211c4dc374339523ccb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 211
        if ( !((isset($context["label"]) ? $context["label"] : null) === false)) {
            // line 212
            if ( !(isset($context["compound"]) ? $context["compound"] : null)) {
                // line 213
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("for" => (isset($context["id"]) ? $context["id"] : null)));
            }
            // line 215
            if ((isset($context["required"]) ? $context["required"] : null)) {
                // line 216
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 218
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : null))) {
                // line 219
                if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : null))) {
                    // line 220
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : null), array("%name%" =>                     // line 221
(isset($context["name"]) ? $context["name"] : null), "%id%" =>                     // line 222
(isset($context["id"]) ? $context["id"] : null)));
                } else {
                    // line 225
                    $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : null));
                }
            }
            // line 228
            echo "<label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : null));
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
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : null) === false)) ? ((isset($context["label"]) ? $context["label"] : null)) : ($this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)))), "html", null, true);
            echo "</label>";
        }
        
        $__internal_5f84c8a5795174327eb0e907de93de3fb15088412070211c4dc374339523ccb5->leave($__internal_5f84c8a5795174327eb0e907de93de3fb15088412070211c4dc374339523ccb5_prof);

    }

    // line 232
    public function block_button_label($context, array $blocks = array())
    {
        $__internal_0b1022bb2890495a5cc48f189d35e5f8544eac8dff9ad03bf94ffc14fcf6bd26 = $this->env->getExtension("native_profiler");
        $__internal_0b1022bb2890495a5cc48f189d35e5f8544eac8dff9ad03bf94ffc14fcf6bd26->enter($__internal_0b1022bb2890495a5cc48f189d35e5f8544eac8dff9ad03bf94ffc14fcf6bd26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        
        $__internal_0b1022bb2890495a5cc48f189d35e5f8544eac8dff9ad03bf94ffc14fcf6bd26->leave($__internal_0b1022bb2890495a5cc48f189d35e5f8544eac8dff9ad03bf94ffc14fcf6bd26_prof);

    }

    // line 236
    public function block_repeated_row($context, array $blocks = array())
    {
        $__internal_c229059f5c4ae5f4d3c66de1c8365750621859be06c7835a42021321168184f6 = $this->env->getExtension("native_profiler");
        $__internal_c229059f5c4ae5f4d3c66de1c8365750621859be06c7835a42021321168184f6->enter($__internal_c229059f5c4ae5f4d3c66de1c8365750621859be06c7835a42021321168184f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        // line 241
        $this->displayBlock("form_rows", $context, $blocks);
        
        $__internal_c229059f5c4ae5f4d3c66de1c8365750621859be06c7835a42021321168184f6->leave($__internal_c229059f5c4ae5f4d3c66de1c8365750621859be06c7835a42021321168184f6_prof);

    }

    // line 244
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_1428ecb13cc993d4d21540150f795a216ce4e85455532fc588932f13c062a81c = $this->env->getExtension("native_profiler");
        $__internal_1428ecb13cc993d4d21540150f795a216ce4e85455532fc588932f13c062a81c->enter($__internal_1428ecb13cc993d4d21540150f795a216ce4e85455532fc588932f13c062a81c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 245
        echo "<div>";
        // line 246
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label');
        // line 247
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        // line 248
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        // line 249
        echo "</div>";
        
        $__internal_1428ecb13cc993d4d21540150f795a216ce4e85455532fc588932f13c062a81c->leave($__internal_1428ecb13cc993d4d21540150f795a216ce4e85455532fc588932f13c062a81c_prof);

    }

    // line 252
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_991abaa6316e8b02b549bc9b29e60b89b9ebb673340d08754134dcff440b69bb = $this->env->getExtension("native_profiler");
        $__internal_991abaa6316e8b02b549bc9b29e60b89b9ebb673340d08754134dcff440b69bb->enter($__internal_991abaa6316e8b02b549bc9b29e60b89b9ebb673340d08754134dcff440b69bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 253
        echo "<div>";
        // line 254
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        // line 255
        echo "</div>";
        
        $__internal_991abaa6316e8b02b549bc9b29e60b89b9ebb673340d08754134dcff440b69bb->leave($__internal_991abaa6316e8b02b549bc9b29e60b89b9ebb673340d08754134dcff440b69bb_prof);

    }

    // line 258
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_bcf0c1f900dab009336a294bd706d86c24c82a673f4bd6c3b2f5ab3d6fe7aa42 = $this->env->getExtension("native_profiler");
        $__internal_bcf0c1f900dab009336a294bd706d86c24c82a673f4bd6c3b2f5ab3d6fe7aa42->enter($__internal_bcf0c1f900dab009336a294bd706d86c24c82a673f4bd6c3b2f5ab3d6fe7aa42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 259
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        
        $__internal_bcf0c1f900dab009336a294bd706d86c24c82a673f4bd6c3b2f5ab3d6fe7aa42->leave($__internal_bcf0c1f900dab009336a294bd706d86c24c82a673f4bd6c3b2f5ab3d6fe7aa42_prof);

    }

    // line 264
    public function block_form($context, array $blocks = array())
    {
        $__internal_8805d10bafecacb66a3d557a2b37b5127b5a03f165ae86e8bcd32835f6784fe4 = $this->env->getExtension("native_profiler");
        $__internal_8805d10bafecacb66a3d557a2b37b5127b5a03f165ae86e8bcd32835f6784fe4->enter($__internal_8805d10bafecacb66a3d557a2b37b5127b5a03f165ae86e8bcd32835f6784fe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 265
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        // line 266
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        // line 267
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        
        $__internal_8805d10bafecacb66a3d557a2b37b5127b5a03f165ae86e8bcd32835f6784fe4->leave($__internal_8805d10bafecacb66a3d557a2b37b5127b5a03f165ae86e8bcd32835f6784fe4_prof);

    }

    // line 270
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_0ed5d7fbdee6a5ff0e803296d41e9f3d3f2e65ccdba3ee1098bbba4cf2eb4b95 = $this->env->getExtension("native_profiler");
        $__internal_0ed5d7fbdee6a5ff0e803296d41e9f3d3f2e65ccdba3ee1098bbba4cf2eb4b95->enter($__internal_0ed5d7fbdee6a5ff0e803296d41e9f3d3f2e65ccdba3ee1098bbba4cf2eb4b95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 271
        $context["method"] = twig_upper_filter($this->env, (isset($context["method"]) ? $context["method"] : null));
        // line 272
        if (twig_in_filter((isset($context["method"]) ? $context["method"] : null), array(0 => "GET", 1 => "POST"))) {
            // line 273
            $context["form_method"] = (isset($context["method"]) ? $context["method"] : null);
        } else {
            // line 275
            $context["form_method"] = "POST";
        }
        // line 277
        echo "<form name=\"";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["form_method"]) ? $context["form_method"] : null)), "html", null, true);
        echo "\"";
        if (((isset($context["action"]) ? $context["action"] : null) != "")) {
            echo " action=\"";
            echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : null), "html", null, true);
            echo "\"";
        }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : null));
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
        if ((isset($context["multipart"]) ? $context["multipart"] : null)) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo ">";
        // line 278
        if (((isset($context["form_method"]) ? $context["form_method"] : null) != (isset($context["method"]) ? $context["method"] : null))) {
            // line 279
            echo "<input type=\"hidden\" name=\"_method\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["method"]) ? $context["method"] : null), "html", null, true);
            echo "\" />";
        }
        
        $__internal_0ed5d7fbdee6a5ff0e803296d41e9f3d3f2e65ccdba3ee1098bbba4cf2eb4b95->leave($__internal_0ed5d7fbdee6a5ff0e803296d41e9f3d3f2e65ccdba3ee1098bbba4cf2eb4b95_prof);

    }

    // line 283
    public function block_form_end($context, array $blocks = array())
    {
        $__internal_34ffd0d504c48ebf3f416e9875a80e6d0c6950d748e80490a04b0d874e4cb049 = $this->env->getExtension("native_profiler");
        $__internal_34ffd0d504c48ebf3f416e9875a80e6d0c6950d748e80490a04b0d874e4cb049->enter($__internal_34ffd0d504c48ebf3f416e9875a80e6d0c6950d748e80490a04b0d874e4cb049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        // line 284
        if (( !array_key_exists("render_rest", $context) || (isset($context["render_rest"]) ? $context["render_rest"] : null))) {
            // line 285
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        }
        // line 287
        echo "</form>";
        
        $__internal_34ffd0d504c48ebf3f416e9875a80e6d0c6950d748e80490a04b0d874e4cb049->leave($__internal_34ffd0d504c48ebf3f416e9875a80e6d0c6950d748e80490a04b0d874e4cb049_prof);

    }

    // line 290
    public function block_form_enctype($context, array $blocks = array())
    {
        $__internal_066feb0b7b8fb5e49cdbc7137a7e364c5507ac9a49f9b1dcf636f4ebc777678d = $this->env->getExtension("native_profiler");
        $__internal_066feb0b7b8fb5e49cdbc7137a7e364c5507ac9a49f9b1dcf636f4ebc777678d->enter($__internal_066feb0b7b8fb5e49cdbc7137a7e364c5507ac9a49f9b1dcf636f4ebc777678d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_enctype"));

        // line 291
        if ((isset($context["multipart"]) ? $context["multipart"] : null)) {
            echo "enctype=\"multipart/form-data\"";
        }
        
        $__internal_066feb0b7b8fb5e49cdbc7137a7e364c5507ac9a49f9b1dcf636f4ebc777678d->leave($__internal_066feb0b7b8fb5e49cdbc7137a7e364c5507ac9a49f9b1dcf636f4ebc777678d_prof);

    }

    // line 294
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_4b5129c5f61cd0e6743fa54ea47c6587848cd14da07e142fedb7f53dcb73926b = $this->env->getExtension("native_profiler");
        $__internal_4b5129c5f61cd0e6743fa54ea47c6587848cd14da07e142fedb7f53dcb73926b->enter($__internal_4b5129c5f61cd0e6743fa54ea47c6587848cd14da07e142fedb7f53dcb73926b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 295
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
            // line 296
            echo "<ul>";
            // line 297
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 298
                echo "<li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 300
            echo "</ul>";
        }
        
        $__internal_4b5129c5f61cd0e6743fa54ea47c6587848cd14da07e142fedb7f53dcb73926b->leave($__internal_4b5129c5f61cd0e6743fa54ea47c6587848cd14da07e142fedb7f53dcb73926b_prof);

    }

    // line 304
    public function block_form_rest($context, array $blocks = array())
    {
        $__internal_082cb13e5a13dd838ca0158a02fc7246a6736b3d374932054f0fc6fde7807478 = $this->env->getExtension("native_profiler");
        $__internal_082cb13e5a13dd838ca0158a02fc7246a6736b3d374932054f0fc6fde7807478->enter($__internal_082cb13e5a13dd838ca0158a02fc7246a6736b3d374932054f0fc6fde7807478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

        // line 305
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 306
            if ( !$this->getAttribute($context["child"], "rendered", array())) {
                // line 307
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'row');
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_082cb13e5a13dd838ca0158a02fc7246a6736b3d374932054f0fc6fde7807478->leave($__internal_082cb13e5a13dd838ca0158a02fc7246a6736b3d374932054f0fc6fde7807478_prof);

    }

    // line 314
    public function block_form_rows($context, array $blocks = array())
    {
        $__internal_029998e36d21d6cea33e04cb8f4e3919d3fa29d3736fd768aba65d69428c9aeb = $this->env->getExtension("native_profiler");
        $__internal_029998e36d21d6cea33e04cb8f4e3919d3fa29d3736fd768aba65d69428c9aeb->enter($__internal_029998e36d21d6cea33e04cb8f4e3919d3fa29d3736fd768aba65d69428c9aeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        // line 315
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 316
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'row');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_029998e36d21d6cea33e04cb8f4e3919d3fa29d3736fd768aba65d69428c9aeb->leave($__internal_029998e36d21d6cea33e04cb8f4e3919d3fa29d3736fd768aba65d69428c9aeb_prof);

    }

    // line 320
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_41ce1dd7e969b04b036123d6db2685452b76e02a2cbb9d121025f3e9c1d5269f = $this->env->getExtension("native_profiler");
        $__internal_41ce1dd7e969b04b036123d6db2685452b76e02a2cbb9d121025f3e9c1d5269f->enter($__internal_41ce1dd7e969b04b036123d6db2685452b76e02a2cbb9d121025f3e9c1d5269f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 321
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : null), "html", null, true);
        echo "\"";
        // line 322
        if ((isset($context["read_only"]) ? $context["read_only"] : null)) {
            echo " readonly=\"readonly\"";
        }
        // line 323
        if ((isset($context["disabled"]) ? $context["disabled"] : null)) {
            echo " disabled=\"disabled\"";
        }
        // line 324
        if ((isset($context["required"]) ? $context["required"] : null)) {
            echo " required=\"required\"";
        }
        // line 325
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            if ((("readonly" != $context["attrname"]) ||  !(isset($context["read_only"]) ? $context["read_only"] : null))) {
                // line 326
                echo " ";
                // line 327
                if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                    // line 328
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : null) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('translator')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)))), "html", null, true);
                    echo "\"";
                } elseif ((                // line 329
$context["attrvalue"] === true)) {
                    // line 330
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "\"";
                } elseif ( !(                // line 331
$context["attrvalue"] === false)) {
                    // line 332
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
        
        $__internal_41ce1dd7e969b04b036123d6db2685452b76e02a2cbb9d121025f3e9c1d5269f->leave($__internal_41ce1dd7e969b04b036123d6db2685452b76e02a2cbb9d121025f3e9c1d5269f_prof);

    }

    // line 337
    public function block_widget_container_attributes($context, array $blocks = array())
    {
        $__internal_ff44cf681ce49b4ef36cf6cf156cc901e44f0cc0ef713348c756f6ad1eb4ab93 = $this->env->getExtension("native_profiler");
        $__internal_ff44cf681ce49b4ef36cf6cf156cc901e44f0cc0ef713348c756f6ad1eb4ab93->enter($__internal_ff44cf681ce49b4ef36cf6cf156cc901e44f0cc0ef713348c756f6ad1eb4ab93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        // line 338
        if ( !twig_test_empty((isset($context["id"]) ? $context["id"] : null))) {
            echo "id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\"";
        }
        // line 339
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 340
            echo " ";
            // line 341
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 342
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : null) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('translator')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)))), "html", null, true);
                echo "\"";
            } elseif ((            // line 343
$context["attrvalue"] === true)) {
                // line 344
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 345
$context["attrvalue"] === false)) {
                // line 346
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_ff44cf681ce49b4ef36cf6cf156cc901e44f0cc0ef713348c756f6ad1eb4ab93->leave($__internal_ff44cf681ce49b4ef36cf6cf156cc901e44f0cc0ef713348c756f6ad1eb4ab93_prof);

    }

    // line 351
    public function block_button_attributes($context, array $blocks = array())
    {
        $__internal_8f3226f23a7151c91cb9de3b52294df19c4b11a2fe3ced96f5cf1e9e145450d1 = $this->env->getExtension("native_profiler");
        $__internal_8f3226f23a7151c91cb9de3b52294df19c4b11a2fe3ced96f5cf1e9e145450d1->enter($__internal_8f3226f23a7151c91cb9de3b52294df19c4b11a2fe3ced96f5cf1e9e145450d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        // line 352
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : null), "html", null, true);
        echo "\"";
        if ((isset($context["disabled"]) ? $context["disabled"] : null)) {
            echo " disabled=\"disabled\"";
        }
        // line 353
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 354
            echo " ";
            // line 355
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 356
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : null) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('translator')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)))), "html", null, true);
                echo "\"";
            } elseif ((            // line 357
$context["attrvalue"] === true)) {
                // line 358
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 359
$context["attrvalue"] === false)) {
                // line 360
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_8f3226f23a7151c91cb9de3b52294df19c4b11a2fe3ced96f5cf1e9e145450d1->leave($__internal_8f3226f23a7151c91cb9de3b52294df19c4b11a2fe3ced96f5cf1e9e145450d1_prof);

    }

    // line 365
    public function block_attributes($context, array $blocks = array())
    {
        $__internal_f43af0c9e7826b9a1ea172979a8e9cd83b90706cf7e422221480e68163df12c1 = $this->env->getExtension("native_profiler");
        $__internal_f43af0c9e7826b9a1ea172979a8e9cd83b90706cf7e422221480e68163df12c1->enter($__internal_f43af0c9e7826b9a1ea172979a8e9cd83b90706cf7e422221480e68163df12c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

        // line 366
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 367
            echo " ";
            // line 368
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 369
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : null) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('translator')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)))), "html", null, true);
                echo "\"";
            } elseif ((            // line 370
$context["attrvalue"] === true)) {
                // line 371
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 372
$context["attrvalue"] === false)) {
                // line 373
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_f43af0c9e7826b9a1ea172979a8e9cd83b90706cf7e422221480e68163df12c1->leave($__internal_f43af0c9e7826b9a1ea172979a8e9cd83b90706cf7e422221480e68163df12c1_prof);

    }

    public function getTemplateName()
    {
        return "form_div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1290 => 373,  1288 => 372,  1283 => 371,  1281 => 370,  1276 => 369,  1274 => 368,  1272 => 367,  1268 => 366,  1262 => 365,  1247 => 360,  1245 => 359,  1240 => 358,  1238 => 357,  1233 => 356,  1231 => 355,  1229 => 354,  1225 => 353,  1216 => 352,  1210 => 351,  1195 => 346,  1193 => 345,  1188 => 344,  1186 => 343,  1181 => 342,  1179 => 341,  1177 => 340,  1173 => 339,  1167 => 338,  1161 => 337,  1145 => 332,  1143 => 331,  1138 => 330,  1136 => 329,  1131 => 328,  1129 => 327,  1127 => 326,  1122 => 325,  1118 => 324,  1114 => 323,  1110 => 322,  1104 => 321,  1098 => 320,  1087 => 316,  1083 => 315,  1077 => 314,  1065 => 307,  1063 => 306,  1059 => 305,  1053 => 304,  1045 => 300,  1037 => 298,  1033 => 297,  1031 => 296,  1029 => 295,  1023 => 294,  1014 => 291,  1008 => 290,  1001 => 287,  998 => 285,  996 => 284,  990 => 283,  980 => 279,  978 => 278,  951 => 277,  948 => 275,  945 => 273,  943 => 272,  941 => 271,  935 => 270,  928 => 267,  926 => 266,  924 => 265,  918 => 264,  911 => 259,  905 => 258,  898 => 255,  896 => 254,  894 => 253,  888 => 252,  881 => 249,  879 => 248,  877 => 247,  875 => 246,  873 => 245,  867 => 244,  860 => 241,  854 => 236,  843 => 232,  820 => 228,  816 => 225,  813 => 222,  812 => 221,  811 => 220,  809 => 219,  807 => 218,  804 => 216,  802 => 215,  799 => 213,  797 => 212,  795 => 211,  789 => 210,  782 => 205,  780 => 204,  774 => 203,  767 => 200,  765 => 199,  759 => 198,  746 => 195,  742 => 192,  739 => 189,  738 => 188,  737 => 187,  735 => 186,  733 => 185,  727 => 184,  720 => 181,  718 => 180,  712 => 179,  705 => 176,  703 => 175,  697 => 174,  690 => 171,  688 => 170,  682 => 169,  675 => 166,  673 => 165,  667 => 164,  659 => 161,  657 => 160,  651 => 159,  644 => 156,  642 => 155,  636 => 154,  629 => 151,  627 => 150,  621 => 149,  614 => 146,  608 => 145,  601 => 142,  599 => 141,  593 => 140,  586 => 137,  584 => 136,  578 => 134,  570 => 130,  560 => 129,  555 => 128,  553 => 127,  550 => 125,  548 => 124,  542 => 123,  534 => 119,  532 => 117,  531 => 116,  530 => 115,  529 => 114,  525 => 113,  522 => 111,  520 => 110,  514 => 109,  506 => 105,  504 => 104,  502 => 103,  500 => 102,  498 => 101,  494 => 100,  491 => 98,  489 => 97,  483 => 96,  466 => 93,  460 => 92,  443 => 89,  437 => 88,  408 => 83,  406 => 82,  403 => 80,  401 => 79,  399 => 78,  394 => 77,  392 => 76,  375 => 75,  369 => 74,  362 => 71,  360 => 70,  358 => 69,  352 => 66,  350 => 65,  348 => 64,  346 => 63,  344 => 62,  335 => 60,  333 => 59,  326 => 58,  323 => 56,  321 => 55,  315 => 54,  308 => 51,  302 => 49,  300 => 48,  296 => 47,  292 => 46,  286 => 45,  278 => 41,  275 => 39,  273 => 38,  267 => 37,  256 => 34,  250 => 33,  243 => 30,  240 => 28,  238 => 27,  232 => 26,  225 => 23,  223 => 22,  221 => 21,  218 => 19,  216 => 18,  212 => 17,  206 => 16,  189 => 13,  187 => 12,  181 => 11,  173 => 7,  170 => 5,  168 => 4,  162 => 3,  155 => 365,  153 => 351,  151 => 337,  149 => 320,  147 => 314,  144 => 311,  142 => 304,  140 => 294,  138 => 290,  136 => 283,  134 => 270,  132 => 264,  130 => 258,  128 => 252,  126 => 244,  124 => 236,  122 => 232,  120 => 210,  118 => 203,  116 => 198,  114 => 184,  112 => 179,  110 => 174,  108 => 169,  106 => 164,  104 => 159,  102 => 154,  100 => 149,  98 => 145,  96 => 140,  94 => 134,  92 => 123,  90 => 109,  88 => 96,  86 => 92,  84 => 88,  82 => 74,  80 => 54,  78 => 45,  76 => 37,  74 => 33,  72 => 26,  70 => 16,  68 => 11,  66 => 3,);
    }
}
/* {# Widgets #}*/
/* */
/* {%- block form_widget -%}*/
/*     {% if compound %}*/
/*         {{- block('form_widget_compound') -}}*/
/*     {% else %}*/
/*         {{- block('form_widget_simple') -}}*/
/*     {% endif %}*/
/* {%- endblock form_widget -%}*/
/* */
/* {%- block form_widget_simple -%}*/
/*     {%- set type = type|default('text') -%}*/
/*     <input type="{{ type }}" {{ block('widget_attributes') }} {% if value is not empty %}value="{{ value }}" {% endif %}/>*/
/* {%- endblock form_widget_simple -%}*/
/* */
/* {%- block form_widget_compound -%}*/
/*     <div {{ block('widget_container_attributes') }}>*/
/*         {%- if form.parent is empty -%}*/
/*             {{ form_errors(form) }}*/
/*         {%- endif -%}*/
/*         {{- block('form_rows') -}}*/
/*         {{- form_rest(form) -}}*/
/*     </div>*/
/* {%- endblock form_widget_compound -%}*/
/* */
/* {%- block collection_widget -%}*/
/*     {% if prototype is defined %}*/
/*         {%- set attr = attr|merge({'data-prototype': form_row(prototype) }) -%}*/
/*     {% endif %}*/
/*     {{- block('form_widget') -}}*/
/* {%- endblock collection_widget -%}*/
/* */
/* {%- block textarea_widget -%}*/
/*     <textarea {{ block('widget_attributes') }}>{{ value }}</textarea>*/
/* {%- endblock textarea_widget -%}*/
/* */
/* {%- block choice_widget -%}*/
/*     {% if expanded %}*/
/*         {{- block('choice_widget_expanded') -}}*/
/*     {% else %}*/
/*         {{- block('choice_widget_collapsed') -}}*/
/*     {% endif %}*/
/* {%- endblock choice_widget -%}*/
/* */
/* {%- block choice_widget_expanded -%}*/
/*     <div {{ block('widget_container_attributes') }}>*/
/*     {%- for child in form %}*/
/*         {{- form_widget(child) -}}*/
/*         {{- form_label(child, null, {translation_domain: choice_translation_domain}) -}}*/
/*     {% endfor -%}*/
/*     </div>*/
/* {%- endblock choice_widget_expanded -%}*/
/* */
/* {%- block choice_widget_collapsed -%}*/
/*     {%- if required and placeholder is none and not placeholder_in_choices and not multiple and (attr.size is not defined or attr.size <= 1) -%}*/
/*         {% set required = false %}*/
/*     {%- endif -%}*/
/*     <select {{ block('widget_attributes') }}{% if multiple %} multiple="multiple"{% endif %}>*/
/*         {%- if placeholder is not none -%}*/
/*             <option value=""{% if required and value is empty %} selected="selected"{% endif %}>{{ placeholder != '' ? (translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain)) }}</option>*/
/*         {%- endif -%}*/
/*         {%- if preferred_choices|length > 0 -%}*/
/*             {% set options = preferred_choices %}*/
/*             {{- block('choice_widget_options') -}}*/
/*             {%- if choices|length > 0 and separator is not none -%}*/
/*                 <option disabled="disabled">{{ separator }}</option>*/
/*             {%- endif -%}*/
/*         {%- endif -%}*/
/*         {%- set options = choices -%}*/
/*         {{- block('choice_widget_options') -}}*/
/*     </select>*/
/* {%- endblock choice_widget_collapsed -%}*/
/* */
/* {%- block choice_widget_options -%}*/
/*     {% for group_label, choice in options %}*/
/*         {%- if choice is iterable -%}*/
/*             <optgroup label="{{ choice_translation_domain is same as(false) ? group_label : group_label|trans({}, choice_translation_domain) }}">*/
/*                 {% set options = choice %}*/
/*                 {{- block('choice_widget_options') -}}*/
/*             </optgroup>*/
/*         {%- else -%}*/
/*             {% set attr = choice.attr %}*/
/*             <option value="{{ choice.value }}" {{ block('attributes') }}{% if choice is selectedchoice(value) %} selected="selected"{% endif %}>{{ choice_translation_domain is same as(false) ? choice.label : choice.label|trans({}, choice_translation_domain) }}</option>*/
/*         {%- endif -%}*/
/*     {% endfor %}*/
/* {%- endblock choice_widget_options -%}*/
/* */
/* {%- block checkbox_widget -%}*/
/*     <input type="checkbox" {{ block('widget_attributes') }}{% if value is defined %} value="{{ value }}"{% endif %}{% if checked %} checked="checked"{% endif %} />*/
/* {%- endblock checkbox_widget -%}*/
/* */
/* {%- block radio_widget -%}*/
/*     <input type="radio" {{ block('widget_attributes') }}{% if value is defined %} value="{{ value }}"{% endif %}{% if checked %} checked="checked"{% endif %} />*/
/* {%- endblock radio_widget -%}*/
/* */
/* {%- block datetime_widget -%}*/
/*     {% if widget == 'single_text' %}*/
/*         {{- block('form_widget_simple') -}}*/
/*     {%- else -%}*/
/*         <div {{ block('widget_container_attributes') }}>*/
/*             {{- form_errors(form.date) -}}*/
/*             {{- form_errors(form.time) -}}*/
/*             {{- form_widget(form.date) -}}*/
/*             {{- form_widget(form.time) -}}*/
/*         </div>*/
/*     {%- endif -%}*/
/* {%- endblock datetime_widget -%}*/
/* */
/* {%- block date_widget -%}*/
/*     {%- if widget == 'single_text' -%}*/
/*         {{ block('form_widget_simple') }}*/
/*     {%- else -%}*/
/*         <div {{ block('widget_container_attributes') }}>*/
/*             {{- date_pattern|replace({*/
/*                 '{{ year }}':  form_widget(form.year),*/
/*                 '{{ month }}': form_widget(form.month),*/
/*                 '{{ day }}':   form_widget(form.day),*/
/*             })|raw -}}*/
/*         </div>*/
/*     {%- endif -%}*/
/* {%- endblock date_widget -%}*/
/* */
/* {%- block time_widget -%}*/
/*     {%- if widget == 'single_text' -%}*/
/*         {{ block('form_widget_simple') }}*/
/*     {%- else -%}*/
/*         {%- set vars = widget == 'text' ? { 'attr': { 'size': 1 }} : {} -%}*/
/*         <div {{ block('widget_container_attributes') }}>*/
/*             {{ form_widget(form.hour, vars) }}{% if with_minutes %}:{{ form_widget(form.minute, vars) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second, vars) }}{% endif %}*/
/*         </div>*/
/*     {%- endif -%}*/
/* {%- endblock time_widget -%}*/
/* */
/* {%- block number_widget -%}*/
/*     {# type="number" doesn't work with floats #}*/
/*     {%- set type = type|default('text') -%}*/
/*     {{ block('form_widget_simple') }}*/
/* {%- endblock number_widget -%}*/
/* */
/* {%- block integer_widget -%}*/
/*     {%- set type = type|default('number') -%}*/
/*     {{ block('form_widget_simple') }}*/
/* {%- endblock integer_widget -%}*/
/* */
/* {%- block money_widget -%}*/
/*     {{ money_pattern|replace({ '{{ widget }}': block('form_widget_simple') })|raw }}*/
/* {%- endblock money_widget -%}*/
/* */
/* {%- block url_widget -%}*/
/*     {%- set type = type|default('url') -%}*/
/*     {{ block('form_widget_simple') }}*/
/* {%- endblock url_widget -%}*/
/* */
/* {%- block search_widget -%}*/
/*     {%- set type = type|default('search') -%}*/
/*     {{ block('form_widget_simple') }}*/
/* {%- endblock search_widget -%}*/
/* */
/* {%- block percent_widget -%}*/
/*     {%- set type = type|default('text') -%}*/
/*     {{ block('form_widget_simple') }} %*/
/* {%- endblock percent_widget -%}*/
/* */
/* {%- block password_widget -%}*/
/*     {%- set type = type|default('password') -%}*/
/*     {{ block('form_widget_simple') }}*/
/* {%- endblock password_widget -%}*/
/* */
/* {%- block hidden_widget -%}*/
/*     {%- set type = type|default('hidden') -%}*/
/*     {{ block('form_widget_simple') }}*/
/* {%- endblock hidden_widget -%}*/
/* */
/* {%- block email_widget -%}*/
/*     {%- set type = type|default('email') -%}*/
/*     {{ block('form_widget_simple') }}*/
/* {%- endblock email_widget -%}*/
/* */
/* {%- block range_widget -%}*/
/*     {% set type = type|default('range') %}*/
/*     {{- block('form_widget_simple') -}}*/
/* {%- endblock range_widget %}*/
/* */
/* {%- block button_widget -%}*/
/*     {%- if label is empty -%}*/
/*         {%- if label_format is not empty -%}*/
/*             {% set label = label_format|replace({*/
/*                 '%name%': name,*/
/*                 '%id%': id,*/
/*             }) %}*/
/*         {%- else -%}*/
/*             {% set label = name|humanize %}*/
/*         {%- endif -%}*/
/*     {%- endif -%}*/
/*     <button type="{{ type|default('button') }}" {{ block('button_attributes') }}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</button>*/
/* {%- endblock button_widget -%}*/
/* */
/* {%- block submit_widget -%}*/
/*     {%- set type = type|default('submit') -%}*/
/*     {{ block('button_widget') }}*/
/* {%- endblock submit_widget -%}*/
/* */
/* {%- block reset_widget -%}*/
/*     {%- set type = type|default('reset') -%}*/
/*     {{ block('button_widget') }}*/
/* {%- endblock reset_widget -%}*/
/* */
/* {# Labels #}*/
/* */
/* {%- block form_label -%}*/
/*     {% if label is not same as(false) -%}*/
/*         {% if not compound -%}*/
/*             {% set label_attr = label_attr|merge({'for': id}) %}*/
/*         {%- endif -%}*/
/*         {% if required -%}*/
/*             {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}*/
/*         {%- endif -%}*/
/*         {% if label is empty -%}*/
/*             {%- if label_format is not empty -%}*/
/*                 {% set label = label_format|replace({*/
/*                     '%name%': name,*/
/*                     '%id%': id,*/
/*                 }) %}*/
/*             {%- else -%}*/
/*                 {% set label = name|humanize %}*/
/*             {%- endif -%}*/
/*         {%- endif -%}*/
/*         <label{% for attrname, attrvalue in label_attr %} {{ attrname }}="{{ attrvalue }}"{% endfor %}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</label>*/
/*     {%- endif -%}*/
/* {%- endblock form_label -%}*/
/* */
/* {%- block button_label -%}{%- endblock -%}*/
/* */
/* {# Rows #}*/
/* */
/* {%- block repeated_row -%}*/
/*     {#*/
/*     No need to render the errors here, as all errors are mapped*/
/*     to the first child (see RepeatedTypeValidatorExtension).*/
/*     #}*/
/*     {{- block('form_rows') -}}*/
/* {%- endblock repeated_row -%}*/
/* */
/* {%- block form_row -%}*/
/*     <div>*/
/*         {{- form_label(form) -}}*/
/*         {{- form_errors(form) -}}*/
/*         {{- form_widget(form) -}}*/
/*     </div>*/
/* {%- endblock form_row -%}*/
/* */
/* {%- block button_row -%}*/
/*     <div>*/
/*         {{- form_widget(form) -}}*/
/*     </div>*/
/* {%- endblock button_row -%}*/
/* */
/* {%- block hidden_row -%}*/
/*     {{ form_widget(form) }}*/
/* {%- endblock hidden_row -%}*/
/* */
/* {# Misc #}*/
/* */
/* {%- block form -%}*/
/*     {{ form_start(form) }}*/
/*         {{- form_widget(form) -}}*/
/*     {{ form_end(form) }}*/
/* {%- endblock form -%}*/
/* */
/* {%- block form_start -%}*/
/*     {% set method = method|upper %}*/
/*     {%- if method in ["GET", "POST"] -%}*/
/*         {% set form_method = method %}*/
/*     {%- else -%}*/
/*         {% set form_method = "POST" %}*/
/*     {%- endif -%}*/
/*     <form name="{{ name }}" method="{{ form_method|lower }}"{% if action != '' %} action="{{ action }}"{% endif %}{% for attrname, attrvalue in attr %} {{ attrname }}="{{ attrvalue }}"{% endfor %}{% if multipart %} enctype="multipart/form-data"{% endif %}>*/
/*     {%- if form_method != method -%}*/
/*         <input type="hidden" name="_method" value="{{ method }}" />*/
/*     {%- endif -%}*/
/* {%- endblock form_start -%}*/
/* */
/* {%- block form_end -%}*/
/*     {%- if not render_rest is defined or render_rest -%}*/
/*         {{ form_rest(form) }}*/
/*     {%- endif -%}*/
/*     </form>*/
/* {%- endblock form_end -%}*/
/* */
/* {%- block form_enctype -%}*/
/*     {% if multipart %}enctype="multipart/form-data"{% endif %}*/
/* {%- endblock form_enctype -%}*/
/* */
/* {%- block form_errors -%}*/
/*     {%- if errors|length > 0 -%}*/
/*     <ul>*/
/*         {%- for error in errors -%}*/
/*             <li>{{ error.message }}</li>*/
/*         {%- endfor -%}*/
/*     </ul>*/
/*     {%- endif -%}*/
/* {%- endblock form_errors -%}*/
/* */
/* {%- block form_rest -%}*/
/*     {% for child in form -%}*/
/*         {% if not child.rendered %}*/
/*             {{- form_row(child) -}}*/
/*         {% endif %}*/
/*     {%- endfor %}*/
/* {% endblock form_rest %}*/
/* */
/* {# Support #}*/
/* */
/* {%- block form_rows -%}*/
/*     {% for child in form %}*/
/*         {{- form_row(child) -}}*/
/*     {% endfor %}*/
/* {%- endblock form_rows -%}*/
/* */
/* {%- block widget_attributes -%}*/
/*     id="{{ id }}" name="{{ full_name }}"*/
/*     {%- if read_only %} readonly="readonly"{% endif -%}*/
/*     {%- if disabled %} disabled="disabled"{% endif -%}*/
/*     {%- if required %} required="required"{% endif -%}*/
/*     {%- for attrname, attrvalue in attr if 'readonly' != attrname or not read_only -%}*/
/*         {{- " " -}}*/
/*         {%- if attrname in ['placeholder', 'title'] -%}*/
/*             {{- attrname }}="{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}"*/
/*         {%- elseif attrvalue is same as(true) -%}*/
/*             {{- attrname }}="{{ attrname }}"*/
/*         {%- elseif attrvalue is not same as(false) -%}*/
/*             {{- attrname }}="{{ attrvalue }}"*/
/*         {%- endif -%}*/
/*     {%- endfor -%}*/
/* {%- endblock widget_attributes -%}*/
/* */
/* {%- block widget_container_attributes -%}*/
/*     {%- if id is not empty %}id="{{ id }}"{% endif -%}*/
/*     {%- for attrname, attrvalue in attr -%}*/
/*         {{- " " -}}*/
/*         {%- if attrname in ['placeholder', 'title'] -%}*/
/*             {{- attrname }}="{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}"*/
/*         {%- elseif attrvalue is same as(true) -%}*/
/*             {{- attrname }}="{{ attrname }}"*/
/*         {%- elseif attrvalue is not same as(false) -%}*/
/*             {{- attrname }}="{{ attrvalue }}"*/
/*         {%- endif -%}*/
/*     {%- endfor -%}*/
/* {%- endblock widget_container_attributes -%}*/
/* */
/* {%- block button_attributes -%}*/
/*     id="{{ id }}" name="{{ full_name }}"{% if disabled %} disabled="disabled"{% endif -%}*/
/*     {%- for attrname, attrvalue in attr -%}*/
/*         {{- " " -}}*/
/*         {%- if attrname in ['placeholder', 'title'] -%}*/
/*             {{- attrname }}="{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}"*/
/*         {%- elseif attrvalue is same as(true) -%}*/
/*             {{- attrname }}="{{ attrname }}"*/
/*         {%- elseif attrvalue is not same as(false) -%}*/
/*             {{- attrname }}="{{ attrvalue }}"*/
/*         {%- endif -%}*/
/*     {%- endfor -%}*/
/* {%- endblock button_attributes -%}*/
/* */
/* {% block attributes -%}*/
/*     {%- for attrname, attrvalue in attr -%}*/
/*         {{- " " -}}*/
/*         {%- if attrname in ['placeholder', 'title'] -%}*/
/*             {{- attrname }}="{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}"*/
/*         {%- elseif attrvalue is same as(true) -%}*/
/*             {{- attrname }}="{{ attrname }}"*/
/*         {%- elseif attrvalue is not same as(false) -%}*/
/*             {{- attrname }}="{{ attrvalue }}"*/
/*         {%- endif -%}*/
/*     {%- endfor -%}*/
/* {%- endblock attributes -%}*/
/* */
