<?php

/* @bolt/async/browse.twig */
class __TwigTemplate_216ad7ddb23b03cd9a023e1679e239b03958a68b8f1f8087c71509904b842cf6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_895e5f761dca081c2569b272c25666489c3e8ad139369d1ae2d18c335f052e0c = $this->env->getExtension("native_profiler");
        $__internal_895e5f761dca081c2569b272c25666489c3e8ad139369d1ae2d18c335f052e0c->enter($__internal_895e5f761dca081c2569b272c25666489c3e8ad139369d1ae2d18c335f052e0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/async/browse.twig"));

        // line 1
        echo "<div class=\"buic-browser\">
    ";
        // line 2
        $context["extensions"] = array(0 => "");
        // line 3
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "files", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
            // line 4
            echo "        ";
            if (!twig_in_filter($this->getAttribute($context["file"], "extension", array()), (isset($context["extensions"]) ? $context["extensions"] : null))) {
                // line 5
                echo "            ";
                $context["extensions"] = twig_array_merge((isset($context["extensions"]) ? $context["extensions"] : null), array(0 => $this->getAttribute($context["file"], "extension", array())));
                // line 6
                echo "        ";
            }
            // line 7
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "    ";
        $context["extensions"] = twig_sort_filter((isset($context["extensions"]) ? $context["extensions"] : null));
        // line 9
        echo "    ";
        $context["multiselect"] = ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "multiselect", array()) && (twig_length_filter($this->env, $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "files", array())) > 0));
        // line 10
        echo "
    <header>
        ";
        // line 13
        echo "        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
        </button>

        ";
        // line 18
        echo "        <h4>
            <span>";
        // line 19
        echo $this->env->getExtension('Bolt')->trans("general.phrase.path-colon");
        echo "</span>
            <a";
        // line 20
        echo $this->env->getExtension('Bolt')->hattr(array("href" => "#", "data-fbrowser-chdir" => $this->env->getExtension('routing')->getPath("asyncbrowse", array("namespace" => $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "namespace", array())))));
        echo ">
                ";
        // line 21
        echo $this->env->getExtension('Bolt')->shy($this->env->getExtension('Bolt')->excerpt($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "namespace", array()), 40));
        // line 22
        echo "</a> /
            ";
        // line 23
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "pathsegments", array())) > 0)) {
            // line 24
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "pathsegments", array()));
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
            foreach ($context['_seq'] as $context["path"] => $context["segment"]) {
                // line 25
                echo "                    ";
                if ( !$this->getAttribute($context["loop"], "first", array())) {
                    echo " / ";
                }
                // line 26
                echo "                    <a";
                echo $this->env->getExtension('Bolt')->hattr(array("href" => "#", "data-fbrowser-chdir" => $this->env->getExtension('routing')->getPath("asyncbrowse", array("namespace" => $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "namespace", array()), "path" => $context["path"]))));
                echo ">
                        ";
                // line 27
                echo $this->env->getExtension('Bolt')->shy($this->env->getExtension('Bolt')->excerpt(((array_key_exists("segment", $context)) ? (_twig_default_filter($context["segment"], "…")) : ("…")), 40));
                echo "
                    </a> /
                ";
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
            unset($context['_seq'], $context['_iterated'], $context['path'], $context['segment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "            ";
        }
        // line 31
        echo "        </h4>
    </header>

    <main>
        ";
        // line 36
        echo "        ";
        if (((twig_length_filter($this->env, $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "directories", array())) + twig_length_filter($this->env, $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "files", array()))) > 0)) {
            // line 37
            echo "            <div class=\"header\">
                <div>
                    <button type=\"button\" aria-pressed=\"true\" class=\"toogle-folders\" title=\"";
            // line 39
            echo $this->env->getExtension('Bolt')->trans("general.phrase.folders");
            echo "\"></button>
                </div>

                <div>
                    <button type=\"button\" aria-pressed=\"true\" class=\"toogle-files\" title=\"";
            // line 43
            echo $this->env->getExtension('Bolt')->trans("page.ckeditor-browse-server.files");
            echo "\"></button>
                </div>

                <div>
                    <i class=\"fa fa-filter\"></i> <input type=\"text\" name=\"filter\" value=\"\" autofocus>
                    <select name=\"ext\">
                        ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["ext"]) {
                // line 50
                echo "                            <option value=\"";
                echo twig_escape_filter($this->env, $context["ext"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $context["ext"]), "html", null, true);
                echo "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ext'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "                    </select>
                </div>
            </div>

            <div class=\"list";
            // line 56
            if ((isset($context["multiselect"]) ? $context["multiselect"] : null)) {
                echo " multi";
            }
            echo "\">
                <table class=\"dashboardlisting\">
                    ";
            // line 59
            echo "                    <tbody class=\"folders\">
                    ";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "directories", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["directory"]) {
                // line 61
                echo "                            <tr class=\"directory\">
                                ";
                // line 62
                if ((isset($context["multiselect"]) ? $context["multiselect"] : null)) {
                    // line 63
                    echo "                                    <td class=\"select\"></td>
                                ";
                }
                // line 65
                echo "                                <td class=\"name\">
                                    <a";
                // line 66
                echo $this->env->getExtension('Bolt')->hattr(array("class" => "entry type-folder", "href" => "#", "data-fbrowser-chdir" => $this->env->getExtension('routing')->getPath("asyncbrowse", array("namespace" => $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "namespace", array()), "path" => $this->getAttribute($context["directory"], "path", array())))));
                echo ">
                                        ";
                // line 67
                echo twig_escape_filter($this->env, $this->getAttribute($context["directory"], "path", array()), "html", null, true);
                echo "/
                                    </a>
                                </td>
                                <td class=\"info\"></td>
                                <td class=\"thumb\"></td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['directory'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "                    </tbody>

                    ";
            // line 77
            echo "                    <tbody class=\"files\">
                        ";
            // line 78
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "files", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 79
                echo "                            ";
                if (twig_in_filter($this->getAttribute($context["file"], "extension", array()), array(0 => "jpeg", 1 => "jpg", 2 => "png", 3 => "gif", 4 => "ico", 5 => "svg"))) {
                    // line 80
                    echo "                                ";
                    $context["type"] = "type-image";
                    // line 81
                    echo "                            ";
                } elseif (twig_in_filter($this->getAttribute($context["file"], "extension", array()), array(0 => "mpg", 1 => "mov", 2 => "mp4", 3 => "m4v", 4 => "ogv", 5 => "wmv", 6 => "avi", 7 => "webm"))) {
                    // line 82
                    echo "                                ";
                    $context["type"] = "type-video";
                    // line 83
                    echo "                            ";
                } elseif (twig_in_filter($this->getAttribute($context["file"], "extension", array()), array(0 => "mp3", 1 => "ogg", 2 => "wav", 3 => "m4a"))) {
                    // line 84
                    echo "                                ";
                    $context["type"] = "type-audio";
                    // line 85
                    echo "                            ";
                } elseif (twig_in_filter($this->getAttribute($context["file"], "extension", array()), array(0 => "pdf"))) {
                    // line 86
                    echo "                                ";
                    $context["type"] = "type-pdf";
                    // line 87
                    echo "                            ";
                } elseif (twig_in_filter($this->getAttribute($context["file"], "extension", array()), array(0 => "ppt", 1 => "pptx"))) {
                    // line 88
                    echo "                                ";
                    $context["type"] = "type-powerpoint";
                    // line 89
                    echo "                            ";
                } elseif (twig_in_filter($this->getAttribute($context["file"], "extension", array()), array(0 => "xls", 1 => "xlsx"))) {
                    // line 90
                    echo "                                ";
                    $context["type"] = "type-excel";
                    // line 91
                    echo "                            ";
                } elseif (twig_in_filter($this->getAttribute($context["file"], "extension", array()), array(0 => "doc", 1 => "docx"))) {
                    // line 92
                    echo "                                ";
                    $context["type"] = "type-word";
                    // line 93
                    echo "                            ";
                } elseif (twig_in_filter($this->getAttribute($context["file"], "extension", array()), array(0 => "twig", 1 => "html", 2 => "js", 3 => "css", 4 => "scss", 5 => "md"))) {
                    // line 94
                    echo "                                ";
                    $context["type"] = "type-code";
                    // line 95
                    echo "                            ";
                } elseif (twig_in_filter($this->getAttribute($context["file"], "extension", array()), array(0 => "txt"))) {
                    // line 96
                    echo "                                ";
                    $context["type"] = "type-text";
                    // line 97
                    echo "                            ";
                } else {
                    // line 98
                    echo "                                ";
                    $context["type"] = "type-file";
                    // line 99
                    echo "                            ";
                }
                // line 100
                echo "
                            <tr";
                // line 101
                echo $this->env->getExtension('Bolt')->hattr(array("class" => (($this->getAttribute($context["file"], "public", array())) ? ("") : ("locked"))));
                echo ">
                                ";
                // line 102
                if ((isset($context["multiselect"]) ? $context["multiselect"] : null)) {
                    // line 103
                    echo "                                    <td class=\"select\">
                                        <input type=\"checkbox\" ";
                    // line 104
                    echo $this->env->getExtension('Bolt')->hattr(array("data-fbrowser-check" => $this->getAttribute($context["file"], "path", array())));
                    echo " />
                                    </td>
                                ";
                }
                // line 107
                echo "
                                <td class=\"name\">
                                    ";
                // line 109
                if ($this->getAttribute($context["file"], "public", array())) {
                    // line 110
                    echo "                                        <a";
                    echo $this->env->getExtension('Bolt')->hattr(array("class" => ("entry " . (isset($context["type"]) ? $context["type"] : null)), "href" => "#", "data-fbrowser-select" => $this->getAttribute($context["file"], "path", array())));
                    echo ">
                                            ";
                    // line 111
                    echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "filename", array()), "html", null, true);
                    echo "
                                        </a>
                                    ";
                } else {
                    // line 114
                    echo "                                        <span class=\"entry ";
                    echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "filename", array()), "html", null, true);
                    echo "</span>
                                    ";
                }
                // line 116
                echo "                                </td>

                                <td class=\"info\">
                                    <div class=\"filesize\" title=\"";
                // line 119
                echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "size", array()), "html", null, true);
                echo " bytes (";
                echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "sizeformatted", array(0 => true, 1 => false), "method"), "html", null, true);
                echo ")\">
                                        ";
                // line 120
                echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "sizeformatted", array(0 => true, 1 => true), "method"), "html", null, true);
                echo "
                                    </div>
                                    ";
                // line 122
                if ($this->getAttribute($context["file"], "image", array())) {
                    // line 123
                    echo "                                        <div class=\"dimensions\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "width", array()), "html", null, true);
                    echo "&thinsp;×&thinsp;";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "height", array()), "html", null, true);
                    echo " px</div>
                                    ";
                }
                // line 125
                echo "                                </td>

                                <td class=\"thumb\">
                                    ";
                // line 128
                if ($this->getAttribute($context["file"], "image", array())) {
                    // line 129
                    echo "                                        ";
                    echo $this->env->getExtension('Bolt')->showImage($this->getAttribute($context["file"], "path", array()), 54, 40, "c");
                    echo "
                                    ";
                }
                // line 131
                echo "                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 134
            echo "                    <tbody>
                </table>
            </div>
        ";
        }
        // line 138
        echo "    </main>

    ";
        // line 140
        if ((isset($context["multiselect"]) ? $context["multiselect"] : null)) {
            // line 141
            echo "        <footer>
            <button type=\"button\" class=\"btn btn-primary btn-sm disabled\" data-fbrowser-add-checked=\"\">";
            // line 142
            echo $this->env->getExtension('Bolt')->trans("general.phrase.add-selected");
            echo "</button>
            <button type=\"button\" class=\"btn btn-primary btn-sm toggle-all\">";
            // line 143
            echo $this->env->getExtension('Bolt')->trans("general.phrase.toggle-all");
            echo "</button>
        </footer>
    ";
        }
        // line 146
        echo "</div>
";
        
        $__internal_895e5f761dca081c2569b272c25666489c3e8ad139369d1ae2d18c335f052e0c->leave($__internal_895e5f761dca081c2569b272c25666489c3e8ad139369d1ae2d18c335f052e0c_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/async/browse.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  411 => 146,  405 => 143,  401 => 142,  398 => 141,  396 => 140,  392 => 138,  386 => 134,  378 => 131,  372 => 129,  370 => 128,  365 => 125,  357 => 123,  355 => 122,  350 => 120,  344 => 119,  339 => 116,  331 => 114,  325 => 111,  320 => 110,  318 => 109,  314 => 107,  308 => 104,  305 => 103,  303 => 102,  299 => 101,  296 => 100,  293 => 99,  290 => 98,  287 => 97,  284 => 96,  281 => 95,  278 => 94,  275 => 93,  272 => 92,  269 => 91,  266 => 90,  263 => 89,  260 => 88,  257 => 87,  254 => 86,  251 => 85,  248 => 84,  245 => 83,  242 => 82,  239 => 81,  236 => 80,  233 => 79,  229 => 78,  226 => 77,  222 => 74,  209 => 67,  205 => 66,  202 => 65,  198 => 63,  196 => 62,  193 => 61,  189 => 60,  186 => 59,  179 => 56,  173 => 52,  162 => 50,  158 => 49,  149 => 43,  142 => 39,  138 => 37,  135 => 36,  129 => 31,  126 => 30,  109 => 27,  104 => 26,  99 => 25,  81 => 24,  79 => 23,  76 => 22,  74 => 21,  70 => 20,  66 => 19,  63 => 18,  57 => 13,  53 => 10,  50 => 9,  47 => 8,  41 => 7,  38 => 6,  35 => 5,  32 => 4,  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* <div class="buic-browser">*/
/*     {% set extensions = [''] %}*/
/*     {% for file in context.files %}*/
/*         {% if file.extension not in extensions %}*/
/*             {% set extensions = extensions|merge([file.extension]) %}*/
/*         {% endif %}*/
/*     {% endfor %}*/
/*     {% set extensions = extensions|sort %}*/
/*     {% set multiselect = context.multiselect and context.files|length > 0 %}*/
/* */
/*     <header>*/
/*         {# Closer #}*/
/*         <button type="button" class="close" data-dismiss="modal" aria-label="Close">*/
/*             <span aria-hidden="true">&times;</span>*/
/*         </button>*/
/* */
/*         {# Path #}*/
/*         <h4>*/
/*             <span>{{ __('general.phrase.path-colon') }}</span>*/
/*             <a{{ hattr({'href': '#', 'data-fbrowser-chdir': path('asyncbrowse', {'namespace': context.namespace}) }) }}>*/
/*                 {{ context.namespace|excerpt(40)|shy -}}*/
/*             </a> /*/
/*             {% if context.pathsegments|length > 0 %}*/
/*                 {% for path, segment in context.pathsegments %}*/
/*                     {% if not loop.first %} / {% endif %}*/
/*                     <a{{ hattr({'href': '#', 'data-fbrowser-chdir': path('asyncbrowse', {'namespace': context.namespace, 'path': path}) }) }}>*/
/*                         {{ segment|default('…')|excerpt(40)|shy }}*/
/*                     </a> /*/
/*                 {% endfor %}*/
/*             {% endif %}*/
/*         </h4>*/
/*     </header>*/
/* */
/*     <main>*/
/*         {# Folders + Files #}*/
/*         {% if context.directories|length + context.files|length > 0 %}*/
/*             <div class="header">*/
/*                 <div>*/
/*                     <button type="button" aria-pressed="true" class="toogle-folders" title="{{ __('general.phrase.folders') }}"></button>*/
/*                 </div>*/
/* */
/*                 <div>*/
/*                     <button type="button" aria-pressed="true" class="toogle-files" title="{{ __('page.ckeditor-browse-server.files') }}"></button>*/
/*                 </div>*/
/* */
/*                 <div>*/
/*                     <i class="fa fa-filter"></i> <input type="text" name="filter" value="" autofocus>*/
/*                     <select name="ext">*/
/*                         {% for ext in extensions %}*/
/*                             <option value="{{ ext }}">{{ ext|upper() }}</option>*/
/*                         {% endfor %}*/
/*                     </select>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="list{% if multiselect %} multi{% endif %}">*/
/*                 <table class="dashboardlisting">*/
/*                     {# Folders #}*/
/*                     <tbody class="folders">*/
/*                     {% for directory in context.directories %}*/
/*                             <tr class="directory">*/
/*                                 {% if multiselect %}*/
/*                                     <td class="select"></td>*/
/*                                 {% endif %}*/
/*                                 <td class="name">*/
/*                                     <a{{ hattr({'class': 'entry type-folder', 'href': '#', 'data-fbrowser-chdir': path('asyncbrowse', {'namespace': context.namespace, 'path': directory.path}) }) }}>*/
/*                                         {{ directory.path }}/*/
/*                                     </a>*/
/*                                 </td>*/
/*                                 <td class="info"></td>*/
/*                                 <td class="thumb"></td>*/
/*                             </tr>*/
/*                         {% endfor %}*/
/*                     </tbody>*/
/* */
/*                     {# Files #}*/
/*                     <tbody class="files">*/
/*                         {% for file in context.files %}*/
/*                             {% if file.extension in ['jpeg', 'jpg', 'png', 'gif', 'ico', 'svg'] %}*/
/*                                 {% set type = 'type-image' %}*/
/*                             {% elseif file.extension in ['mpg', 'mov', 'mp4', 'm4v', 'ogv', 'wmv', 'avi', 'webm'] %}*/
/*                                 {% set type = 'type-video' %}*/
/*                             {% elseif file.extension in ['mp3', 'ogg', 'wav', 'm4a'] %}*/
/*                                 {% set type = 'type-audio' %}*/
/*                             {% elseif file.extension in ['pdf'] %}*/
/*                                 {% set type = 'type-pdf' %}*/
/*                             {% elseif file.extension in ['ppt', 'pptx'] %}*/
/*                                 {% set type = 'type-powerpoint' %}*/
/*                             {% elseif file.extension in ['xls', 'xlsx'] %}*/
/*                                 {% set type = 'type-excel' %}*/
/*                             {% elseif file.extension in ['doc', 'docx'] %}*/
/*                                 {% set type = 'type-word' %}*/
/*                             {% elseif file.extension in ['twig', 'html', 'js', 'css', 'scss', 'md'] %}*/
/*                                 {% set type = 'type-code' %}*/
/*                             {% elseif file.extension in ['txt'] %}*/
/*                                 {% set type = 'type-text' %}*/
/*                             {% else %}*/
/*                                 {% set type = 'type-file' %}*/
/*                             {% endif %}*/
/* */
/*                             <tr{{ hattr({'class': file.public ? '' : 'locked'}) }}>*/
/*                                 {% if multiselect %}*/
/*                                     <td class="select">*/
/*                                         <input type="checkbox" {{ hattr({ 'data-fbrowser-check': file.path }) }} />*/
/*                                     </td>*/
/*                                 {% endif %}*/
/* */
/*                                 <td class="name">*/
/*                                     {% if file.public %}*/
/*                                         <a{{ hattr({'class': 'entry ' ~ type, 'href': '#', 'data-fbrowser-select': file.path}) }}>*/
/*                                             {{ file.filename }}*/
/*                                         </a>*/
/*                                     {% else %}*/
/*                                         <span class="entry {{ type }}">{{ file.filename }}</span>*/
/*                                     {% endif %}*/
/*                                 </td>*/
/* */
/*                                 <td class="info">*/
/*                                     <div class="filesize" title="{{ file.size }} bytes ({{ file.sizeformatted(true, false) }})">*/
/*                                         {{ file.sizeformatted(true, true) }}*/
/*                                     </div>*/
/*                                     {% if file.image %}*/
/*                                         <div class="dimensions">{{ file.width }}&thinsp;×&thinsp;{{ file.height }} px</div>*/
/*                                     {% endif %}*/
/*                                 </td>*/
/* */
/*                                 <td class="thumb">*/
/*                                     {% if file.image %}*/
/*                                         {{ file.path|showimage(54, 40, 'c') }}*/
/*                                     {% endif %}*/
/*                                 </td>*/
/*                             </tr>*/
/*                         {% endfor %}*/
/*                     <tbody>*/
/*                 </table>*/
/*             </div>*/
/*         {% endif %}*/
/*     </main>*/
/* */
/*     {% if multiselect %}*/
/*         <footer>*/
/*             <button type="button" class="btn btn-primary btn-sm disabled" data-fbrowser-add-checked="">{{ __('general.phrase.add-selected') }}</button>*/
/*             <button type="button" class="btn btn-primary btn-sm toggle-all">{{ __('general.phrase.toggle-all') }}</button>*/
/*         </footer>*/
/*     {% endif %}*/
/* </div>*/
/* */
