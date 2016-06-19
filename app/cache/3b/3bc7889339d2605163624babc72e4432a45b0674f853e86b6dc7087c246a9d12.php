<?php

/* @bolt/editfile/editfile.twig */
class __TwigTemplate_e1376323de0780244c67445675ec8e5e18c32f7db3a8e124378482147ae300bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("@bolt/_base/_page-nav.twig", "@bolt/editfile/editfile.twig", 3);
        $this->blocks = array(
            'page_nav' => array($this, 'block_page_nav'),
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
            'page_main' => array($this, 'block_page_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@bolt/_base/_page-nav.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a53a8b63cc2a3e38d70ac5c52e7f157e6bb3feb813d004e34cad5ee1a54393bb = $this->env->getExtension("native_profiler");
        $__internal_a53a8b63cc2a3e38d70ac5c52e7f157e6bb3feb813d004e34cad5ee1a54393bb->enter($__internal_a53a8b63cc2a3e38d70ac5c52e7f157e6bb3feb813d004e34cad5ee1a54393bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/editfile/editfile.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a53a8b63cc2a3e38d70ac5c52e7f157e6bb3feb813d004e34cad5ee1a54393bb->leave($__internal_a53a8b63cc2a3e38d70ac5c52e7f157e6bb3feb813d004e34cad5ee1a54393bb_prof);

    }

    // line 5
    public function block_page_nav($context, array $blocks = array())
    {
        $__internal_468a7a4218babbef20f9041b175ddb6f6f1bfe99c5af25742c2db72ad12fa234 = $this->env->getExtension("native_profiler");
        $__internal_468a7a4218babbef20f9041b175ddb6f6f1bfe99c5af25742c2db72ad12fa234->enter($__internal_468a7a4218babbef20f9041b175ddb6f6f1bfe99c5af25742c2db72ad12fa234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_nav"));

        echo "Settings/Configuration";
        
        $__internal_468a7a4218babbef20f9041b175ddb6f6f1bfe99c5af25742c2db72ad12fa234->leave($__internal_468a7a4218babbef20f9041b175ddb6f6f1bfe99c5af25742c2db72ad12fa234_prof);

    }

    // line 7
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_fa372e20ae1559bc99cc8cea9677bd90712e01f51a9dfdb66b27c0dc97e1b80a = $this->env->getExtension("native_profiler");
        $__internal_fa372e20ae1559bc99cc8cea9677bd90712e01f51a9dfdb66b27c0dc97e1b80a->enter($__internal_fa372e20ae1559bc99cc8cea9677bd90712e01f51a9dfdb66b27c0dc97e1b80a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "write_allowed", array())) ? ($this->env->getExtension('Bolt')->trans("page.edit-file.title.edit")) : ($this->env->getExtension('Bolt')->trans("page.edit-file.title.view")));
        
        $__internal_fa372e20ae1559bc99cc8cea9677bd90712e01f51a9dfdb66b27c0dc97e1b80a->leave($__internal_fa372e20ae1559bc99cc8cea9677bd90712e01f51a9dfdb66b27c0dc97e1b80a_prof);

    }

    // line 9
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_9d25003fb81d081fd535e850cb2e4c064ed52377780ec1bcd87f2d601dc5b9b3 = $this->env->getExtension("native_profiler");
        $__internal_9d25003fb81d081fd535e850cb2e4c064ed52377780ec1bcd87f2d601dc5b9b3->enter($__internal_9d25003fb81d081fd535e850cb2e4c064ed52377780ec1bcd87f2d601dc5b9b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "basename", array()), "html", null, true);
        
        $__internal_9d25003fb81d081fd535e850cb2e4c064ed52377780ec1bcd87f2d601dc5b9b3->leave($__internal_9d25003fb81d081fd535e850cb2e4c064ed52377780ec1bcd87f2d601dc5b9b3_prof);

    }

    // line 11
    public function block_page_main($context, array $blocks = array())
    {
        $__internal_64fdbf1461cec96a71059974291d842538be6756d21f0575ac3df7932a0b17a4 = $this->env->getExtension("native_profiler");
        $__internal_64fdbf1461cec96a71059974291d842538be6756d21f0575ac3df7932a0b17a4->enter($__internal_64fdbf1461cec96a71059974291d842538be6756d21f0575ac3df7932a0b17a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_main"));

        // line 12
        echo "
    ";
        // line 13
        $context["macro"] = $this->loadTemplate("@bolt/_macro/_macro.twig", "@bolt/editfile/editfile.twig", 13);
        // line 14
        echo "    ";
        $context["__internal_c6ffd0627a98897908a3c7c355d3cda030510c017317d3445619d5ccfae6a0fa"] = $this->loadTemplate("@bolt/_buic/_moment.twig", "@bolt/editfile/editfile.twig", 14);
        // line 15
        echo "    ";
        $context["__internal_f97d2de20cead560189b97810a0403156308d0a48d9ee043e84f9286c92a74c4"] = $this->loadTemplate("@bolt/_macro/_files_path.twig", "@bolt/editfile/editfile.twig", 15);
        // line 16
        echo "
    ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->addData("editcontent.msg", array("change_quit" => $this->env->getExtension('Bolt')->trans("general.phrase.warning-unfinished-changes-loss"), "saving" => $this->env->getExtension('Bolt')->trans("general.phrase.saving-ellipsis"))), "html", null, true);
        // line 20
        echo "

    ";
        // line 22
        $context["attr_text"] = array("_bind" => array(0 => "editfile", 1 => array("readonly" => (($this->getAttribute(        // line 23
(isset($context["context"]) ? $context["context"] : null), "write_allowed", array())) ? (false) : (true)))), "class" => "CodeMirror-scroll", "id" => "form_contents", "name" => "form[contents]", "required" => false, "style" => "width: 98%; min-height: 350px; white-space: pre; word-wrap: normal; overflow-x: scroll;");
        // line 30
        echo "
    <div class=\"row\">
        <div class=\"col-xs-12\">

            ";
        // line 34
        echo $context["__internal_f97d2de20cead560189b97810a0403156308d0a48d9ee043e84f9286c92a74c4"]->getfiles_path($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "pathsegments", array()), $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "namespace", array()), array("path" => "", "namespace" => $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "namespace", array())));
        echo "

            ";
        // line 36
        echo $this->env->getExtension('Bolt')->widgets("editfile_below_header", "backend");
        echo "

            <form method=\"post\" class=\"form-inline\" id=\"editfile\" autocomplete=\"off\">
                ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "form", array()), "_token", array()), 'widget');
        echo "

                <div>
                    <textarea";
        // line 42
        echo $context["macro"]->getattr((isset($context["attr_text"]) ? $context["attr_text"] : null));
        echo ">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "form", array()), "vars", array()), "value", array()), "contents", array()), "html", null, true);
        echo "</textarea>
                </div>

                <div>
                    <button type=\"button\" id=\"saveeditfile\" class=\"btn btn-primary\" ";
        // line 46
        if ( !$this->getAttribute((isset($context["context"]) ? $context["context"] : null), "write_allowed", array())) {
            echo "disabled";
        }
        echo ">
                        <i class=\"fa fa-flag\"></i> ";
        // line 47
        echo $this->env->getExtension('Bolt')->trans("page.edit-file.button.save");
        echo "
                    </button>
                    <a class=\"btn btn-default confirm ";
        // line 49
        if ( !$this->getAttribute((isset($context["context"]) ? $context["context"] : null), "write_allowed", array())) {
            echo "disabled";
        }
        echo "\" style=\"margin-left: 24px;\"
                       data-confirm=\"";
        // line 50
        echo $this->env->getExtension('Bolt')->trans("page.edit-file.confirm-revert");
        echo "\"
                       href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fileedit", array("namespace" => $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "namespace", array()), "file" => $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "file", array()))), "html", null, true);
        echo "\"
                    >
                        <i class=\"fa fa-undo\"></i> ";
        // line 53
        echo $this->env->getExtension('Bolt')->trans("page.edit-file.button.revert");
        echo "
                    </a>

                  <div class=\"relatedfiles\">
                    ";
        // line 57
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "filegroup", array())) > 1)) {
            // line 58
            echo "                      ";
            echo $this->env->getExtension('Bolt')->trans("page.edit-file.note-related");
            echo "
                      ";
            // line 59
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "filegroup", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["related"]) {
                // line 60
                echo "                        ";
                if (($context["related"] != $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "basename", array()))) {
                    // line 61
                    echo "                          <a class=\"btn btn-tertiary btn-small\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fileedit", array("namespace" => $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "namespace", array()), "file" => ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "additionalpath", array()) . $context["related"]))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["related"], "html", null, true);
                    echo "</a>
                        ";
                }
                // line 63
                echo "                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['related'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "                    ";
        }
        // line 65
        echo "                  </div>
                </div>

            <p class=\"lastsaved\" style=\"padding-top: 12px;\">
                ";
        // line 69
        echo $this->env->getExtension('Bolt')->trans("general.phrase.saved-on-colon");
        echo "
                <strong>";
        // line 70
        echo $this->env->getExtension('Bolt')->localeDateTime($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "datechanged", array()), "%c");
        echo "</strong>
                (";
        // line 71
        echo $context["__internal_c6ffd0627a98897908a3c7c355d3cda030510c017317d3445619d5ccfae6a0fa"]->getbuic_moment($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "datechanged", array()));
        echo ")
            </p>

            </form>

            ";
        // line 76
        echo $this->env->getExtension('Bolt')->widgets("editfile_bottom", "backend");
        echo "

        </div>
    </div>

    ";
        // line 81
        if (twig_in_filter($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "filetype", array()), array(0 => "twig", 1 => "html", 2 => "htm"))) {
            // line 82
            echo "        ";
            $context["codemirror"] = array(0 => "xml", 1 => "javascript", 2 => "css", 3 => "htmlmixed");
            // line 83
            echo "    ";
        } elseif (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "filetype", array()) == "php")) {
            // line 84
            echo "        ";
            $context["codemirror"] = array(0 => "matchbrackets", 1 => "javascript", 2 => "css", 3 => "htmlmixed", 4 => "clike", 5 => "php");
            // line 85
            echo "    ";
        } elseif (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "filetype", array()) == "yml")) {
            // line 86
            echo "        ";
            $context["codemirror"] = array(0 => "yaml");
            // line 87
            echo "    ";
        } elseif (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "filetype", array()) == "md")) {
            // line 88
            echo "        ";
            $context["codemirror"] = array(0 => "markdown");
            // line 89
            echo "    ";
        } elseif (twig_in_filter($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "filetype", array()), array(0 => "css", 1 => "less"))) {
            // line 90
            echo "        ";
            $context["codemirror"] = array(0 => "css");
            // line 91
            echo "    ";
        } elseif (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "filetype", array()) == "js")) {
            // line 92
            echo "        ";
            $context["codemirror"] = array(0 => "javascript");
            // line 93
            echo "    ";
        } else {
            // line 94
            echo "        ";
            $context["codemirror"] = array();
            // line 95
            echo "    ";
        }
        // line 96
        echo "
    ";
        // line 98
        echo "    <link rel=\"stylesheet\" property=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/ckeditor/plugins/codemirror/css/codemirror.min.css", "bolt"), "html", null, true);
        echo "\">
    <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/ckeditor/ckeditor.js", "bolt"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/ckeditor/plugins/codemirror/js/codemirror.min.js", "bolt"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/ckeditor/plugins/codemirror/js/codemirror.addons.search.min.js", "bolt"), "html", null, true);
        echo "\"></script>
    ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["codemirror"]) ? $context["codemirror"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
            // line 103
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((("js/ckeditor/plugins/codemirror/plugins/" . $context["file"]) . ".min.js"), "bolt"), "html", null, true);
            echo "\"></script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "
";
        
        $__internal_64fdbf1461cec96a71059974291d842538be6756d21f0575ac3df7932a0b17a4->leave($__internal_64fdbf1461cec96a71059974291d842538be6756d21f0575ac3df7932a0b17a4_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/editfile/editfile.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  305 => 105,  296 => 103,  292 => 102,  288 => 101,  284 => 100,  280 => 99,  275 => 98,  272 => 96,  269 => 95,  266 => 94,  263 => 93,  260 => 92,  257 => 91,  254 => 90,  251 => 89,  248 => 88,  245 => 87,  242 => 86,  239 => 85,  236 => 84,  233 => 83,  230 => 82,  228 => 81,  220 => 76,  212 => 71,  208 => 70,  204 => 69,  198 => 65,  195 => 64,  189 => 63,  181 => 61,  178 => 60,  174 => 59,  169 => 58,  167 => 57,  160 => 53,  155 => 51,  151 => 50,  145 => 49,  140 => 47,  134 => 46,  125 => 42,  119 => 39,  113 => 36,  108 => 34,  102 => 30,  100 => 23,  99 => 22,  95 => 20,  93 => 17,  90 => 16,  87 => 15,  84 => 14,  82 => 13,  79 => 12,  73 => 11,  61 => 9,  49 => 7,  37 => 5,  11 => 3,);
    }
}
/* {# Page: NavSecondary > Configuration > Main configuration | Contenttypes | Taxonomy | ... #}*/
/* */
/* {% extends '@bolt/_base/_page-nav.twig' %}*/
/* */
/* {% block page_nav 'Settings/Configuration' %}*/
/* */
/* {% block page_title context.write_allowed ? __('page.edit-file.title.edit') : __('page.edit-file.title.view') %}*/
/* */
/* {% block page_subtitle context.basename %}*/
/* */
/* {% block page_main %}*/
/* */
/*     {% import '@bolt/_macro/_macro.twig' as macro %}*/
/*     {% from '@bolt/_buic/_moment.twig' import buic_moment %}*/
/*     {% from '@bolt/_macro/_files_path.twig' import files_path %}*/
/* */
/*     {{ data('editcontent.msg', {*/
/*         'change_quit': __('general.phrase.warning-unfinished-changes-loss'),*/
/*         'saving':      __('general.phrase.saving-ellipsis')*/
/*     }) }}*/
/* */
/*     {% set attr_text = {*/
/*         _bind:     ['editfile', {readonly: context.write_allowed ? false : true}],*/
/*         class:     'CodeMirror-scroll',*/
/*         id:        'form_contents',*/
/*         name:      'form[contents]',*/
/*         required:  false,*/
/*         style:     'width: 98%; min-height: 350px; white-space: pre; word-wrap: normal; overflow-x: scroll;',*/
/*     } %}*/
/* */
/*     <div class="row">*/
/*         <div class="col-xs-12">*/
/* */
/*             {{ files_path(context.pathsegments, context.namespace, {'path': '', 'namespace': context.namespace}) }}*/
/* */
/*             {{ widgets('editfile_below_header', 'backend') }}*/
/* */
/*             <form method="post" class="form-inline" id="editfile" autocomplete="off">*/
/*                 {{ form_widget(context.form._token) }}*/
/* */
/*                 <div>*/
/*                     <textarea{{ macro.attr(attr_text) }}>{{ context.form.vars.value.contents }}</textarea>*/
/*                 </div>*/
/* */
/*                 <div>*/
/*                     <button type="button" id="saveeditfile" class="btn btn-primary" {% if not context.write_allowed %}disabled{% endif %}>*/
/*                         <i class="fa fa-flag"></i> {{ __('page.edit-file.button.save') }}*/
/*                     </button>*/
/*                     <a class="btn btn-default confirm {% if not context.write_allowed %}disabled{% endif %}" style="margin-left: 24px;"*/
/*                        data-confirm="{{ __("page.edit-file.confirm-revert") }}"*/
/*                        href="{{ path('fileedit', {'namespace': context.namespace, 'file': context.file}) }}"*/
/*                     >*/
/*                         <i class="fa fa-undo"></i> {{ __("page.edit-file.button.revert") }}*/
/*                     </a>*/
/* */
/*                   <div class="relatedfiles">*/
/*                     {% if context.filegroup|length > 1 %}*/
/*                       {{ __("page.edit-file.note-related") }}*/
/*                       {% for related in context.filegroup %}*/
/*                         {% if related != context.basename %}*/
/*                           <a class="btn btn-tertiary btn-small" href="{{ path('fileedit', {'namespace': context.namespace, 'file': context.additionalpath ~ related}) }}">{{ related }}</a>*/
/*                         {% endif %}*/
/*                       {% endfor %}*/
/*                     {% endif %}*/
/*                   </div>*/
/*                 </div>*/
/* */
/*             <p class="lastsaved" style="padding-top: 12px;">*/
/*                 {{ __('general.phrase.saved-on-colon') }}*/
/*                 <strong>{{ context.datechanged|localdate("%c") }}</strong>*/
/*                 ({{ buic_moment(context.datechanged) }})*/
/*             </p>*/
/* */
/*             </form>*/
/* */
/*             {{ widgets('editfile_bottom', 'backend') }}*/
/* */
/*         </div>*/
/*     </div>*/
/* */
/*     {% if context.filetype in ['twig', 'html', 'htm'] %}*/
/*         {% set codemirror = ['xml', 'javascript', 'css', 'htmlmixed'] %}*/
/*     {% elseif context.filetype == "php" %}*/
/*         {% set codemirror = ['matchbrackets', 'javascript', 'css', 'htmlmixed', 'clike', 'php'] %}*/
/*     {% elseif context.filetype == "yml" %}*/
/*         {% set codemirror = ['yaml'] %}*/
/*     {% elseif context.filetype == "md" %}*/
/*         {% set codemirror = ['markdown'] %}*/
/*     {% elseif context.filetype in ['css', 'less'] %}*/
/*         {% set codemirror = ['css'] %}*/
/*     {% elseif context.filetype == "js" %}*/
/*         {% set codemirror = ['javascript'] %}*/
/*     {% else %}*/
/*         {% set codemirror = [] %}*/
/*     {% endif %}*/
/* */
/*     {# use the files includes in ckeditor/codemirror plugin, instead of duplicating files. #}*/
/*     <link rel="stylesheet" property="stylesheet" href="{{ asset('js/ckeditor/plugins/codemirror/css/codemirror.min.css', 'bolt') }}">*/
/*     <script src="{{ asset('js/ckeditor/ckeditor.js', 'bolt') }}"></script>*/
/*     <script src="{{ asset('js/ckeditor/plugins/codemirror/js/codemirror.min.js', 'bolt') }}"></script>*/
/*     <script src="{{ asset('js/ckeditor/plugins/codemirror/js/codemirror.addons.search.min.js', 'bolt') }}"></script>*/
/*     {% for file in codemirror %}*/
/*         <script src="{{ asset('js/ckeditor/plugins/codemirror/plugins/' ~ file ~ '.min.js', 'bolt') }}"></script>*/
/*     {% endfor %}*/
/* */
/* {% endblock page_main %}*/
/* */
