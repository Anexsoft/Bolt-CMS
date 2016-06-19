<?php

/* @bolt/components/panel-stack.twig */
class __TwigTemplate_43f7e2cb3415bb46e6d35a6b8142f9149d786030aff212195889f9760f94b6d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("@bolt/_base/_panel.twig", "@bolt/components/panel-stack.twig", 5);
        $this->blocks = array(
            'panel_class' => array($this, 'block_panel_class'),
            'panel_icon' => array($this, 'block_panel_icon'),
            'panel_head' => array($this, 'block_panel_head'),
            'panel_body' => array($this, 'block_panel_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@bolt/_base/_panel.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_27c214ec7340489f3979c6d1892fcfedf3801779a2fce40d3772a903969a5f8d = $this->env->getExtension("native_profiler");
        $__internal_27c214ec7340489f3979c6d1892fcfedf3801779a2fce40d3772a903969a5f8d->enter($__internal_27c214ec7340489f3979c6d1892fcfedf3801779a2fce40d3772a903969a5f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/components/panel-stack.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27c214ec7340489f3979c6d1892fcfedf3801779a2fce40d3772a903969a5f8d->leave($__internal_27c214ec7340489f3979c6d1892fcfedf3801779a2fce40d3772a903969a5f8d_prof);

    }

    // line 7
    public function block_panel_class($context, array $blocks = array())
    {
        $__internal_8d98f2f9f55abc621e2151c701189b0645ea643be51f08765e6744648b22b339 = $this->env->getExtension("native_profiler");
        $__internal_8d98f2f9f55abc621e2151c701189b0645ea643be51f08765e6744648b22b339->enter($__internal_8d98f2f9f55abc621e2151c701189b0645ea643be51f08765e6744648b22b339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_class"));

        echo "panel-stack";
        
        $__internal_8d98f2f9f55abc621e2151c701189b0645ea643be51f08765e6744648b22b339->leave($__internal_8d98f2f9f55abc621e2151c701189b0645ea643be51f08765e6744648b22b339_prof);

    }

    // line 9
    public function block_panel_icon($context, array $blocks = array())
    {
        $__internal_b3137e41d7918dbf8d3e3658ce8cef4e9a88f8791b1d059bfe14bca9b727161f = $this->env->getExtension("native_profiler");
        $__internal_b3137e41d7918dbf8d3e3658ce8cef4e9a88f8791b1d059bfe14bca9b727161f->enter($__internal_b3137e41d7918dbf8d3e3658ce8cef4e9a88f8791b1d059bfe14bca9b727161f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_icon"));

        echo "fa-paperclip";
        
        $__internal_b3137e41d7918dbf8d3e3658ce8cef4e9a88f8791b1d059bfe14bca9b727161f->leave($__internal_b3137e41d7918dbf8d3e3658ce8cef4e9a88f8791b1d059bfe14bca9b727161f_prof);

    }

    // line 11
    public function block_panel_head($context, array $blocks = array())
    {
        $__internal_ffc03ce0af55035c3c8521a2a2810cd8acac2b5e44be9b4b4a7c00e8abf0f13f = $this->env->getExtension("native_profiler");
        $__internal_ffc03ce0af55035c3c8521a2a2810cd8acac2b5e44be9b4b4a7c00e8abf0f13f->enter($__internal_ffc03ce0af55035c3c8521a2a2810cd8acac2b5e44be9b4b4a7c00e8abf0f13f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_head"));

        echo $this->env->getExtension('Bolt')->trans("general.phrase.stack-files");
        
        $__internal_ffc03ce0af55035c3c8521a2a2810cd8acac2b5e44be9b4b4a7c00e8abf0f13f->leave($__internal_ffc03ce0af55035c3c8521a2a2810cd8acac2b5e44be9b4b4a7c00e8abf0f13f_prof);

    }

    // line 13
    public function block_panel_body($context, array $blocks = array())
    {
        $__internal_a2c0dc7a7242d7db8f37081b1d474efd45a901e457f04f2f4b8008bdb00ebf0c = $this->env->getExtension("native_profiler");
        $__internal_a2c0dc7a7242d7db8f37081b1d474efd45a901e457f04f2f4b8008bdb00ebf0c->enter($__internal_a2c0dc7a7242d7db8f37081b1d474efd45a901e457f04f2f4b8008bdb00ebf0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_body"));

        // line 14
        echo "    <fieldset class=\"buic-stack\" data-bolt-widget=\"buicStack\">
        <div class=\"stackholder\">
            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "stack", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["idx"] => $context["item"]) {
            if (($context["idx"] < 7)) {
                // line 17
                echo "                <div class=\"stackitem ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "type", array()), "html", null, true);
                echo " info-pop\" data-placement=\"bottom\" data-html=\"true\" data-title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "basename", array()), "html", null, true);
                echo "\" data-content=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "info", array()), "html", null, true);
                echo "\">
                    ";
                // line 18
                if (($this->getAttribute($context["item"], "type", array()) == "image")) {
                    // line 19
                    echo "                        <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->thumbnail($this->getAttribute($context["item"], "filepath", array()), 100, 100), "html", null, true);
                    echo "\" width=\"100\" height=\"100\" alt=\"";
                    echo $this->env->getExtension('Bolt')->trans("general.phrase.thumbnail");
                    echo "\">
                    ";
                } else {
                    // line 21
                    echo "                       <strong>";
                    echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["item"], "extension", array())), "html", null, true);
                    echo "</strong>
                       <small>";
                    // line 22
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "basename", array()), "html", null, true);
                    echo "</small>
                    ";
                }
                // line 24
                echo "                </div>
            ";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 26
            echo "                <div class=\"empty\">";
            echo $this->env->getExtension('Bolt')->trans("general.phrase.stack-empty");
            echo "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['idx'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "        </div>

        ";
        // line 30
        if ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "canUpload", array())) {
            // line 31
            echo "            <div class=\"buic-progress\" data-bolt-widget=\"buicProgress\"></div>
        ";
        }
        // line 33
        echo "
        <div class=\"stackbuttons\">
            ";
        // line 35
        if ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "canUpload", array())) {
            // line 36
            echo "                <div class=\"btn-group\">
                    <span class=\"btn btn-tertiary fileinput-button\">
                        <i class=\"fa fa-upload\"></i>
                        <span>";
            // line 39
            echo $this->env->getExtension('Bolt')->trans("general.phrase.upload");
            echo "</span>
                        <input id=\"fileupload-stack\"
                               type=\"file\"
                               name=\"files[]\"
                               data-url=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("upload", array("namespace" => $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "namespace", array()))), "html", null, true);
            echo "\"
                               accept=\".";
            // line 44
            echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "filetypes", array()), ",."), "html", null, true);
            echo "\">
                    </span>
                </div>
            ";
        }
        // line 48
        echo "
            <div class=\"btn-group\">
                ";
        // line 50
        $context["attr"] = array("class" => "btn btn-tertiary", "data-bolt-widget" => array("buicBrowser" => array("namespace" => "files")), "type" => "button");
        // line 59
        echo "                <button";
        echo $this->env->getExtension('Bolt')->hattr((isset($context["attr"]) ? $context["attr"] : null));
        echo "><i class=\"fa fa-download\"></i> ";
        echo $this->env->getExtension('Bolt')->trans("general.phrase.select");
        echo "</button>
            </div>
        </div>

        <div class=\"templates\">
            <div class=\"stackitem image\">
                <img src=\"data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACwAAAAAAQABAAACAkQBADs=\" width=\"100\" height=\"100\" alt=\"";
        // line 65
        echo $this->env->getExtension('Bolt')->trans("general.phrase.thumbnail");
        echo "\">
            </div>

            <div class=\"stackitem other\">
                <strong></strong>
                <small></small>
            </div>
        </div>
    </fieldset>

";
        
        $__internal_a2c0dc7a7242d7db8f37081b1d474efd45a901e457f04f2f4b8008bdb00ebf0c->leave($__internal_a2c0dc7a7242d7db8f37081b1d474efd45a901e457f04f2f4b8008bdb00ebf0c_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/components/panel-stack.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 65,  179 => 59,  177 => 50,  173 => 48,  166 => 44,  162 => 43,  155 => 39,  150 => 36,  148 => 35,  144 => 33,  140 => 31,  138 => 30,  134 => 28,  125 => 26,  118 => 24,  113 => 22,  108 => 21,  100 => 19,  98 => 18,  89 => 17,  83 => 16,  79 => 14,  73 => 13,  61 => 11,  49 => 9,  37 => 7,  11 => 5,);
    }
}
/* {##*/
/*  # Sidebar-Panel: Displays the files located on the stack*/
/*  # (Usage Example: Dashboards sidebar)*/
/*  #}*/
/* {% extends '@bolt/_base/_panel.twig' %}*/
/* */
/* {% block panel_class 'panel-stack' %}*/
/* */
/* {% block panel_icon 'fa-paperclip' %}*/
/* */
/* {% block panel_head __('general.phrase.stack-files') %}*/
/* */
/* {% block panel_body %}*/
/*     <fieldset class="buic-stack" data-bolt-widget="buicStack">*/
/*         <div class="stackholder">*/
/*             {% for idx, item in context.stack if idx < 7 %}*/
/*                 <div class="stackitem {{ item.type }} info-pop" data-placement="bottom" data-html="true" data-title="{{ item.basename }}" data-content="{{ item.info }}">*/
/*                     {% if item.type == 'image' %}*/
/*                         <img src="{{ item.filepath|thumbnail(100, 100) }}" width="100" height="100" alt="{{ __('general.phrase.thumbnail') }}">*/
/*                     {% else %}*/
/*                        <strong>{{ item.extension|upper }}</strong>*/
/*                        <small>{{ item.basename }}</small>*/
/*                     {% endif %}*/
/*                 </div>*/
/*             {% else %}*/
/*                 <div class="empty">{{ __('general.phrase.stack-empty') }}</div>*/
/*             {% endfor %}*/
/*         </div>*/
/* */
/*         {% if context.canUpload %}*/
/*             <div class="buic-progress" data-bolt-widget="buicProgress"></div>*/
/*         {% endif %}*/
/* */
/*         <div class="stackbuttons">*/
/*             {% if context.canUpload %}*/
/*                 <div class="btn-group">*/
/*                     <span class="btn btn-tertiary fileinput-button">*/
/*                         <i class="fa fa-upload"></i>*/
/*                         <span>{{ __('general.phrase.upload') }}</span>*/
/*                         <input id="fileupload-stack"*/
/*                                type="file"*/
/*                                name="files[]"*/
/*                                data-url="{{ url('upload', {namespace: context.namespace}) }}"*/
/*                                accept=".{{ context.filetypes|join(',.') }}">*/
/*                     </span>*/
/*                 </div>*/
/*             {% endif %}*/
/* */
/*             <div class="btn-group">*/
/*                 {% set attr = {*/
/*                     'class': 'btn btn-tertiary',*/
/*                     'data-bolt-widget': {*/
/*                         buicBrowser: {*/
/*                             namespace: 'files',*/
/*                         },*/
/*                     },*/
/*                     'type': 'button',*/
/*                 } %}*/
/*                 <button{{ hattr(attr) }}><i class="fa fa-download"></i> {{ __('general.phrase.select') }}</button>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="templates">*/
/*             <div class="stackitem image">*/
/*                 <img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACwAAAAAAQABAAACAkQBADs=" width="100" height="100" alt="{{ __('general.phrase.thumbnail') }}">*/
/*             </div>*/
/* */
/*             <div class="stackitem other">*/
/*                 <strong></strong>*/
/*                 <small></small>*/
/*             </div>*/
/*         </div>*/
/*     </fieldset>*/
/* */
/* {% endblock panel_body %}*/
/* */
