<?php

/* @bolt/changelog/_macros.twig */
class __TwigTemplate_fe216164e64b48321063b63347fd9e3085d0142d4f19c9366421cc1009b82bac extends Twig_Template
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
        $__internal_71747ea86f7895b287f7982a3910c94e839b4be4e47f4def1bc9db6dfc381fcb = $this->env->getExtension("native_profiler");
        $__internal_71747ea86f7895b287f7982a3910c94e839b4be4e47f4def1bc9db6dfc381fcb->enter($__internal_71747ea86f7895b287f7982a3910c94e839b4be4e47f4def1bc9db6dfc381fcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/changelog/_macros.twig"));

        // line 23
        echo "
";
        // line 225
        echo "

";
        
        $__internal_71747ea86f7895b287f7982a3910c94e839b4be4e47f4def1bc9db6dfc381fcb->leave($__internal_71747ea86f7895b287f7982a3910c94e839b4be4e47f4def1bc9db6dfc381fcb_prof);

    }

    // line 1
    public function getchangelog_pager($__currentpage__ = null, $__pagecount__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "currentpage" => $__currentpage__,
            "pagecount" => $__pagecount__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_d7efc7b00be425252789587952f17d324d63a0fb3763e5a79f0a2a553497e3b9 = $this->env->getExtension("native_profiler");
            $__internal_d7efc7b00be425252789587952f17d324d63a0fb3763e5a79f0a2a553497e3b9->enter($__internal_d7efc7b00be425252789587952f17d324d63a0fb3763e5a79f0a2a553497e3b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "changelog_pager"));

            // line 2
            echo "        <ul class=\"pagination pagination-centered\">
            ";
            // line 3
            if (((isset($context["currentpage"]) ? $context["currentpage"] : null) > 1)) {
                // line 4
                echo "                <li><a href=\"?page=1\"><i style=\"font-weight: bold\" class=\"fa fa-angle-double-left\"></i></a></li>
                <li><a href=\"?page=";
                // line 5
                echo twig_escape_filter($this->env, ((isset($context["currentpage"]) ? $context["currentpage"] : null) - 1), "html", null, true);
                echo "\"><i style=\"font-weight: bold\" class=\"fa fa-angle-left\"></i></a></li>
            ";
            } else {
                // line 7
                echo "                <li class=\"disabled\"><span><i style=\"font-weight: bold\" class=\"fa fa-angle-double-left\"></i></span></li>
                <li class=\"disabled\"><span><i style=\"font-weight: bold\" class=\"fa fa-angle-left\"></i></span></li>
            ";
            }
            // line 10
            echo "
            <li><span>";
            // line 11
            echo $this->env->getExtension('Bolt')->trans("general.phrase.page");
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["currentpage"]) ? $context["currentpage"] : null), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, (isset($context["pagecount"]) ? $context["pagecount"] : null), "html", null, true);
            echo "</span></li>

            ";
            // line 13
            if (((isset($context["currentpage"]) ? $context["currentpage"] : null) < (isset($context["pagecount"]) ? $context["pagecount"] : null))) {
                // line 14
                echo "                <li><a href=\"?page=";
                echo twig_escape_filter($this->env, ((isset($context["currentpage"]) ? $context["currentpage"] : null) + 1), "html", null, true);
                echo "\"><i style=\"font-weight: bold\" class=\"fa fa-angle-right\"></i></a></li>
                <li><a href=\"?page=";
                // line 15
                echo twig_escape_filter($this->env, (isset($context["pagecount"]) ? $context["pagecount"] : null), "html", null, true);
                echo "\"><i style=\"font-weight: bold\" class=\"fa fa-angle-double-right\"></i></a></li>
            ";
            } else {
                // line 17
                echo "                <li class=\"disabled\"><span><i style=\"font-weight: bold\" class=\"fa fa-angle-right\"></i></span></li>
                <li class=\"disabled\"><span><i style=\"font-weight: bold\" class=\"fa fa-angle-double-right\"></i></span></li>
            ";
            }
            // line 20
            echo "        </ul>

";
            
            $__internal_d7efc7b00be425252789587952f17d324d63a0fb3763e5a79f0a2a553497e3b9->leave($__internal_d7efc7b00be425252789587952f17d324d63a0fb3763e5a79f0a2a553497e3b9_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 24
    public function getchangelog_details($__entry__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "entry" => $__entry__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_92af88bab4953dccb962d0a2293a26e2f68bf2737809bf0769812b32da78cefd = $this->env->getExtension("native_profiler");
            $__internal_92af88bab4953dccb962d0a2293a26e2f68bf2737809bf0769812b32da78cefd->enter($__internal_92af88bab4953dccb962d0a2293a26e2f68bf2737809bf0769812b32da78cefd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "changelog_details"));

            // line 25
            echo "    ";
            $context["macro"] = $this->loadTemplate("@bolt/_macro/_macro.twig", "@bolt/changelog/_macros.twig", 25);
            // line 26
            echo "    ";
            $context["__internal_ae1265a4e1f5c463aa2ea9b2a0276bbf393b00c4e0787ca0f2859d987056f960"] = $this->loadTemplate("@bolt/_buic/_moment.twig", "@bolt/changelog/_macros.twig", 26);
            // line 27
            echo "
    ";
            // line 28
            $context["preview_w"] = 200;
            // line 29
            echo "    ";
            $context["preview_h"] = 150;
            // line 30
            echo "
    <h3>
        \"<a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editcontent", array("contenttypeslug" => $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "contenttype", array()), "id" => $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "contentid", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "title", array()), "html", null, true);
            echo "</a>\"
        <em><span class=\"time\">";
            // line 33
            echo $this->getAttribute($this, "changelog_mutation", array(0 => $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "mutation_type", array())), "method");
            echo " ";
            echo $context["__internal_ae1265a4e1f5c463aa2ea9b2a0276bbf393b00c4e0787ca0f2859d987056f960"]->getbuic_moment($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "date", array()));
            echo "</span>
        ";
            // line 34
            echo $this->env->getExtension('Bolt')->trans("general.phrase.by");
            echo "</em> <strong>";
            echo $context["macro"]->getuserlink((($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "ownerid", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "ownerid", array()), "")) : ("")));
            echo "</strong>
    </h3>

    <div class=\"changelog-details\">
        <div class=\"user\">
           <i class=\"icon icon-user\"></i>
        </div>

        <div class=\"body\">
            <p>
                ";
            // line 44
            if ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/changelog/enabled"), "method")) {
                // line 45
                echo "                    ";
                if ($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "comment", array())) {
                    echo "<h4><strong>Comment</strong>: ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "comment", array()), "html", null, true);
                    echo "</h4>";
                }
                // line 46
                echo "                ";
            }
            // line 47
            echo "            </p>

            <table class=\"table table-bordered table-condensed table-changelog-details\">
                <thead>
                    <tr>
                        <th>";
            // line 52
            echo $this->env->getExtension('Bolt')->trans("general.phrase.field");
            echo "</th>
                        <th>";
            // line 53
            echo $this->env->getExtension('Bolt')->trans("general.phrase.value-old");
            echo "</th>
                        <th>";
            // line 54
            echo $this->env->getExtension('Bolt')->trans("general.phrase.value-new");
            echo "</th>
                    </tr>
                </thead>
                <tbody>
                ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "changedfields", array()));
            foreach ($context['_seq'] as $context["key"] => $context["field"]) {
                // line 59
                echo "                    <tr>
                        <td><strong>";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "label", array()), "html", null, true);
                echo "</strong></td>

                        ";
                // line 62
                if (($this->getAttribute($context["field"], "type", array()) == "normal")) {
                    // line 63
                    echo "                            <td class=\"change-log-item\">
                                ";
                    // line 64
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["field"], "before", array()), "render", array()), "html", null, true);
                    echo "
                            </td>
                            <td class=\"change-log-item\">
                                ";
                    // line 67
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array()), "html", null, true);
                    echo "
                            </td>
                        ";
                } elseif (($this->getAttribute(                // line 69
$context["field"], "type", array()) == "html")) {
                    // line 70
                    echo "                            <td class=\"change-log-item\">
                                ";
                    // line 71
                    echo $this->getAttribute($this->getAttribute($context["field"], "before", array()), "render", array());
                    echo "
                            </td>
                            <td class=\"change-log-item\">
                                ";
                    // line 74
                    echo $this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array());
                    echo "
                            </td>
                        ";
                } elseif (($this->getAttribute(                // line 76
$context["field"], "type", array()) == "filelist")) {
                    // line 77
                    echo "                            <td class=\"change-log-item\">
                                ";
                    // line 78
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["field"], "before", array()), "render", array()));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                        // line 79
                        echo "                                    <strong>File:</strong> ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "filename", array()), "html", null, true);
                        echo "<br>
                                    <strong>Title:</strong> ";
                        // line 80
                        echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "title", array()), "html", null, true);
                        echo "

                                    ";
                        // line 82
                        if ( !$this->getAttribute($context["loop"], "last", array())) {
                            // line 83
                            echo "                                    <br><br>
                                    ";
                        }
                        // line 85
                        echo "                                ";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 86
                    echo "                            </td>
                            <td class=\"change-log-item\">
                                ";
                    // line 88
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array()));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                        // line 89
                        echo "                                    <strong>File:</strong> ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "filename", array()), "html", null, true);
                        echo "<br>
                                    <strong>Title:</strong> ";
                        // line 90
                        echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "title", array()), "html", null, true);
                        echo "

                                    ";
                        // line 92
                        if ( !$this->getAttribute($context["loop"], "last", array())) {
                            // line 93
                            echo "                                    <br><br>
                                    ";
                        }
                        // line 95
                        echo "                                ";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 96
                    echo "                            </td>
                        ";
                } elseif (($this->getAttribute(                // line 97
$context["field"], "type", array()) == "geolocation")) {
                    // line 98
                    echo "                            <td class=\"change-log-item\">
                                <strong>Address:</strong> ";
                    // line 99
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "before", array()), "render", array()), "address", array()), "html", null, true);
                    echo "<br>
                                <strong>Latitude:</strong> ";
                    // line 100
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "before", array()), "render", array()), "latitude", array()), "html", null, true);
                    echo "<br>
                                <strong>Longitude:</strong> ";
                    // line 101
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "before", array()), "render", array()), "longitude", array()), "html", null, true);
                    echo "<br>
                                <strong>Matched address:</strong> ";
                    // line 102
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "before", array()), "render", array()), "formatted_address", array()), "html", null, true);
                    echo "
                            </td>
                            <td class=\"change-log-item\">
                                <strong>Address:</strong> ";
                    // line 105
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array()), "address", array()), "html", null, true);
                    echo "<br>
                                <strong>Latitude:</strong> ";
                    // line 106
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array()), "latitude", array()), "html", null, true);
                    echo "<br>
                                <strong>Longitude:</strong> ";
                    // line 107
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array()), "longitude", array()), "html", null, true);
                    echo "<br>
                                <strong>Matched address:</strong> ";
                    // line 108
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array()), "formatted_address", array()), "html", null, true);
                    echo "
                            </td>
                        ";
                } elseif (($this->getAttribute(                // line 110
$context["field"], "type", array()) == "image")) {
                    // line 111
                    echo "                            <td class=\"change-log-item\">
                                <strong>File:</strong> ";
                    // line 112
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "before", array()), "render", array()), "file", array()), "html", null, true);
                    echo "<br>
                                <strong>Title:</strong> ";
                    // line 113
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "before", array()), "render", array()), "title", array()), "html", null, true);
                    echo "<br>
                                <div class=\"content-preview imageholder\" id=\"thumbnail-";
                    // line 114
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\">
                                ";
                    // line 115
                    if (($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "before", array()), "render", array()), "file", array()) != "")) {
                        // line 116
                        echo "                                    ";
                        $context["preview_path"] = $this->env->getExtension('Bolt')->thumbnail($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "before", array()), "render", array()), "file", array()), (isset($context["preview_w"]) ? $context["preview_w"] : null), (isset($context["preview_h"]) ? $context["preview_h"] : null), "c");
                        // line 117
                        echo "                                    <img src=\"";
                        echo twig_escape_filter($this->env, (isset($context["preview_path"]) ? $context["preview_path"] : null), "html", null, true);
                        echo "\" alt=\"Preview\" width=\"";
                        echo twig_escape_filter($this->env, (isset($context["preview_w"]) ? $context["preview_w"] : null), "html", null, true);
                        echo "\" height=\"";
                        echo twig_escape_filter($this->env, (isset($context["preview_h"]) ? $context["preview_h"] : null), "html", null, true);
                        echo "\">
                                ";
                    }
                    // line 119
                    echo "                                </div>
                            </td>
                            <td class=\"change-log-item\">
                                <strong>File:</strong> ";
                    // line 122
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array()), "file", array()), "html", null, true);
                    echo "<br>
                                <strong>Title:</strong> ";
                    // line 123
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array()), "title", array()), "html", null, true);
                    echo "<br>
                                <div class=\"content-preview imageholder\" id=\"thumbnail-";
                    // line 124
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\">
                                ";
                    // line 125
                    if (($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array()), "file", array()) != "")) {
                        // line 126
                        echo "                                    ";
                        $context["preview_path"] = $this->env->getExtension('Bolt')->thumbnail($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array()), "file", array()), (isset($context["preview_w"]) ? $context["preview_w"] : null), (isset($context["preview_h"]) ? $context["preview_h"] : null), "c");
                        // line 127
                        echo "                                    <img src=\"";
                        echo twig_escape_filter($this->env, (isset($context["preview_path"]) ? $context["preview_path"] : null), "html", null, true);
                        echo "\" alt=\"Preview\" width=\"";
                        echo twig_escape_filter($this->env, (isset($context["preview_w"]) ? $context["preview_w"] : null), "html", null, true);
                        echo "\" height=\"";
                        echo twig_escape_filter($this->env, (isset($context["preview_h"]) ? $context["preview_h"] : null), "html", null, true);
                        echo "\">
                                ";
                    }
                    // line 129
                    echo "                                </div>
                            </td>
                        ";
                } elseif (($this->getAttribute(                // line 131
$context["field"], "type", array()) == "imagelist")) {
                    // line 132
                    echo "                            <td class=\"change-log-item\">
                                ";
                    // line 133
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["field"], "before", array()), "render", array()));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                        // line 134
                        echo "                                    <strong>File:</strong> ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "filename", array()), "html", null, true);
                        echo "<br>
                                    <strong>Title:</strong> ";
                        // line 135
                        echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "title", array()), "html", null, true);
                        echo "<br>
                                    <div class=\"content-preview imageholder\" id=\"thumbnail-";
                        // line 136
                        echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                        echo "\">
                                    ";
                        // line 137
                        if (($this->getAttribute($context["image"], "filename", array()) != "")) {
                            // line 138
                            echo "                                        ";
                            $context["preview_path"] = $this->env->getExtension('Bolt')->thumbnail($this->getAttribute($context["image"], "filename", array()), (isset($context["preview_w"]) ? $context["preview_w"] : null), (isset($context["preview_h"]) ? $context["preview_h"] : null), "c");
                            // line 139
                            echo "                                        <img src=\"";
                            echo twig_escape_filter($this->env, (isset($context["preview_path"]) ? $context["preview_path"] : null), "html", null, true);
                            echo "\" alt=\"Preview\" width=\"";
                            echo twig_escape_filter($this->env, (isset($context["preview_w"]) ? $context["preview_w"] : null), "html", null, true);
                            echo "\" height=\"";
                            echo twig_escape_filter($this->env, (isset($context["preview_h"]) ? $context["preview_h"] : null), "html", null, true);
                            echo "\">
                                    ";
                        }
                        // line 141
                        echo "                                    </div>

                                    ";
                        // line 143
                        if ( !$this->getAttribute($context["loop"], "last", array())) {
                            // line 144
                            echo "                                    <br>
                                    ";
                        }
                        // line 146
                        echo "                                ";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 147
                    echo "                            </td>
                            <td class=\"change-log-item\">
                                ";
                    // line 149
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array()));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                        // line 150
                        echo "                                    <strong>File:</strong> ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "filename", array()), "html", null, true);
                        echo "<br>
                                    <strong>Title:</strong> ";
                        // line 151
                        echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "title", array()), "html", null, true);
                        echo "<br>
                                    <div class=\"content-preview imageholder\" id=\"thumbnail-";
                        // line 152
                        echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                        echo "\">
                                    ";
                        // line 153
                        if (($this->getAttribute($context["image"], "filename", array()) != "")) {
                            // line 154
                            echo "                                        ";
                            $context["preview_path"] = $this->env->getExtension('Bolt')->thumbnail($this->getAttribute($context["image"], "filename", array()), (isset($context["preview_w"]) ? $context["preview_w"] : null), (isset($context["preview_h"]) ? $context["preview_h"] : null), "c");
                            // line 155
                            echo "                                        <img src=\"";
                            echo twig_escape_filter($this->env, (isset($context["preview_path"]) ? $context["preview_path"] : null), "html", null, true);
                            echo "\" alt=\"Preview\" width=\"";
                            echo twig_escape_filter($this->env, (isset($context["preview_w"]) ? $context["preview_w"] : null), "html", null, true);
                            echo "\" height=\"";
                            echo twig_escape_filter($this->env, (isset($context["preview_h"]) ? $context["preview_h"] : null), "html", null, true);
                            echo "\">
                                    ";
                        }
                        // line 157
                        echo "                                    </div>

                                    ";
                        // line 159
                        if ( !$this->getAttribute($context["loop"], "last", array())) {
                            // line 160
                            echo "                                    <br>
                                    ";
                        }
                        // line 162
                        echo "                                ";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 163
                    echo "                            </td>
                        ";
                } elseif ((($this->getAttribute(                // line 164
$context["field"], "type", array()) == "markdown") || ($this->getAttribute($context["field"], "type", array()) == "textarea"))) {
                    // line 165
                    echo "                            <td class=\"change-log-item\">
                                <pre style=\"white-space: pre-wrap; background-color: inherit; border: 0;\">";
                    // line 166
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["field"], "before", array()), "render", array()), "html", null, true);
                    echo "</pre>
                            </td>
                            <td class=\"change-log-item\">
                                <pre style=\"white-space: pre-wrap; background-color: inherit; border: 0;\">";
                    // line 169
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array()), "html", null, true);
                    echo "</pre>
                            </td>
                        ";
                } elseif (($this->getAttribute(                // line 171
$context["field"], "type", array()) == "select")) {
                    // line 172
                    echo "                            <td class=\"change-log-item\">
                                ";
                    // line 173
                    if (twig_test_iterable($this->getAttribute($this->getAttribute($context["field"], "before", array()), "render", array()))) {
                        // line 174
                        echo "                                    <ul>
                                    ";
                        // line 175
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["field"], "before", array()), "render", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["select"]) {
                            // line 176
                            echo "                                        <li>";
                            echo twig_escape_filter($this->env, $context["select"], "html", null, true);
                            echo "</li>
                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['select'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 178
                        echo "                                    </ul>
                                ";
                    } else {
                        // line 180
                        echo "                                    ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["field"], "before", array()), "render", array()), "html", null, true);
                        echo "
                                ";
                    }
                    // line 182
                    echo "                            </td>
                            <td class=\"change-log-item\">
                                ";
                    // line 184
                    if (twig_test_iterable($this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array()))) {
                        // line 185
                        echo "                                    <ul>
                                    ";
                        // line 186
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["select"]) {
                            // line 187
                            echo "                                        <li>";
                            echo twig_escape_filter($this->env, $context["select"], "html", null, true);
                            echo "</li>
                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['select'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 189
                        echo "                                    </ul>
                                ";
                    } else {
                        // line 191
                        echo "                                    ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array()), "html", null, true);
                        echo "
                                ";
                    }
                    // line 193
                    echo "                            </td>
                        ";
                } elseif (($this->getAttribute(                // line 194
$context["field"], "type", array()) == "video")) {
                    // line 195
                    echo "                            <td class=\"change-log-item\">
                                <strong>Title:</strong> ";
                    // line 196
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "before", array()), "render", array()), "title", array()), "html", null, true);
                    echo "<br>
                                <strong>URL:</strong> ";
                    // line 197
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "before", array()), "render", array()), "url", array()), "html", null, true);
                    echo "<br>
                                <strong>Size:</strong> ";
                    // line 198
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "before", array()), "render", array()), "width", array()), "html", null, true);
                    echo " x ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "before", array()), "render", array()), "height", array()), "html", null, true);
                    echo "<br>
                                <div class=\"imageholder\" id=\"thumbnail-";
                    // line 199
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\">
                                    ";
                    // line 200
                    if ((($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "before", array(), "any", false, true), "render", array(), "any", false, true), "thumbnail", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "before", array(), "any", false, true), "render", array(), "any", false, true), "thumbnail", array()), "")) : (""))) {
                        // line 201
                        echo "                                        <img src=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "before", array()), "render", array()), "thumbnail", array()), "html", null, true);
                        echo "\" width=\"200\" height=\"150\">
                                    ";
                    }
                    // line 203
                    echo "                                </div>
                                <div class=\"hidden video\" id=\"";
                    // line 204
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\">";
                    echo $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array()), "html", array());
                    echo "</div>
                            </td>
                            <td class=\"change-log-item\">
                                <strong>Title:</strong> ";
                    // line 207
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array()), "title", array()), "html", null, true);
                    echo "<br>
                                <strong>URL:</strong> ";
                    // line 208
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array()), "url", array()), "html", null, true);
                    echo "<br>
                                <strong>Size:</strong> ";
                    // line 209
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array()), "width", array()), "html", null, true);
                    echo " x ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array()), "height", array()), "html", null, true);
                    echo "<br>
                                <div class=\"imageholder\" id=\"thumbnail-";
                    // line 210
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\">
                                    ";
                    // line 211
                    if ((($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "after", array(), "any", false, true), "render", array(), "any", false, true), "thumbnail", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "after", array(), "any", false, true), "render", array(), "any", false, true), "thumbnail", array()), "")) : (""))) {
                        // line 212
                        echo "                                        <img src=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array()), "thumbnail", array()), "html", null, true);
                        echo "\" width=\"";
                        echo twig_escape_filter($this->env, (isset($context["preview_w"]) ? $context["preview_w"] : null), "html", null, true);
                        echo "\" height=\"";
                        echo twig_escape_filter($this->env, (isset($context["preview_h"]) ? $context["preview_h"] : null), "html", null, true);
                        echo "\">
                                    ";
                    }
                    // line 214
                    echo "                                </div>
                                <div class=\"hidden video\" id=\"";
                    // line 215
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\">";
                    echo $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array()), "html", array());
                    echo "</div>
                            </td>
                        ";
                }
                // line 218
                echo "                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 220
            echo "                </tbody>
            </table>
        </div>
    </div>
";
            
            $__internal_92af88bab4953dccb962d0a2293a26e2f68bf2737809bf0769812b32da78cefd->leave($__internal_92af88bab4953dccb962d0a2293a26e2f68bf2737809bf0769812b32da78cefd_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 227
    public function getchangelog_mutation($__raw__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "raw" => $__raw__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_40ddbc30197e58cb90010fc01ee45382fb1bf0eb99afe732e035469feab5f628 = $this->env->getExtension("native_profiler");
            $__internal_40ddbc30197e58cb90010fc01ee45382fb1bf0eb99afe732e035469feab5f628->enter($__internal_40ddbc30197e58cb90010fc01ee45382fb1bf0eb99afe732e035469feab5f628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "changelog_mutation"));

            // line 228
            echo "    ";
            $context["mapping"] = array("UPDATE" => "changed", "INSERT" => "created", "DELETE" => "deleted", "HOLD" => "put on hold", "PUBLISH" => "published", "DRAFT" => "depublished");
            // line 229
            echo "    ";
            if ($this->getAttribute((isset($context["mapping"]) ? $context["mapping"] : null), (isset($context["raw"]) ? $context["raw"] : null), array(), "array", true, true)) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mapping"]) ? $context["mapping"] : null), (isset($context["raw"]) ? $context["raw"] : null), array(), "array"), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, (isset($context["raw"]) ? $context["raw"] : null), "html", null, true);
            }
            
            $__internal_40ddbc30197e58cb90010fc01ee45382fb1bf0eb99afe732e035469feab5f628->leave($__internal_40ddbc30197e58cb90010fc01ee45382fb1bf0eb99afe732e035469feab5f628_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@bolt/changelog/_macros.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  833 => 229,  830 => 228,  815 => 227,  793 => 220,  786 => 218,  778 => 215,  775 => 214,  765 => 212,  763 => 211,  759 => 210,  753 => 209,  749 => 208,  745 => 207,  737 => 204,  734 => 203,  728 => 201,  726 => 200,  722 => 199,  716 => 198,  712 => 197,  708 => 196,  705 => 195,  703 => 194,  700 => 193,  694 => 191,  690 => 189,  681 => 187,  677 => 186,  674 => 185,  672 => 184,  668 => 182,  662 => 180,  658 => 178,  649 => 176,  645 => 175,  642 => 174,  640 => 173,  637 => 172,  635 => 171,  630 => 169,  624 => 166,  621 => 165,  619 => 164,  616 => 163,  602 => 162,  598 => 160,  596 => 159,  592 => 157,  582 => 155,  579 => 154,  577 => 153,  573 => 152,  569 => 151,  564 => 150,  547 => 149,  543 => 147,  529 => 146,  525 => 144,  523 => 143,  519 => 141,  509 => 139,  506 => 138,  504 => 137,  500 => 136,  496 => 135,  491 => 134,  474 => 133,  471 => 132,  469 => 131,  465 => 129,  455 => 127,  452 => 126,  450 => 125,  446 => 124,  442 => 123,  438 => 122,  433 => 119,  423 => 117,  420 => 116,  418 => 115,  414 => 114,  410 => 113,  406 => 112,  403 => 111,  401 => 110,  396 => 108,  392 => 107,  388 => 106,  384 => 105,  378 => 102,  374 => 101,  370 => 100,  366 => 99,  363 => 98,  361 => 97,  358 => 96,  344 => 95,  340 => 93,  338 => 92,  333 => 90,  328 => 89,  311 => 88,  307 => 86,  293 => 85,  289 => 83,  287 => 82,  282 => 80,  277 => 79,  260 => 78,  257 => 77,  255 => 76,  250 => 74,  244 => 71,  241 => 70,  239 => 69,  234 => 67,  228 => 64,  225 => 63,  223 => 62,  218 => 60,  215 => 59,  211 => 58,  204 => 54,  200 => 53,  196 => 52,  189 => 47,  186 => 46,  179 => 45,  177 => 44,  162 => 34,  156 => 33,  150 => 32,  146 => 30,  143 => 29,  141 => 28,  138 => 27,  135 => 26,  132 => 25,  117 => 24,  97 => 20,  92 => 17,  87 => 15,  82 => 14,  80 => 13,  71 => 11,  68 => 10,  63 => 7,  58 => 5,  55 => 4,  53 => 3,  50 => 2,  34 => 1,  25 => 225,  22 => 23,);
    }
}
/* {% macro changelog_pager(currentpage, pagecount) %}*/
/*         <ul class="pagination pagination-centered">*/
/*             {% if currentpage > 1 %}*/
/*                 <li><a href="?page=1"><i style="font-weight: bold" class="fa fa-angle-double-left"></i></a></li>*/
/*                 <li><a href="?page={{ currentpage - 1 }}"><i style="font-weight: bold" class="fa fa-angle-left"></i></a></li>*/
/*             {% else %}*/
/*                 <li class="disabled"><span><i style="font-weight: bold" class="fa fa-angle-double-left"></i></span></li>*/
/*                 <li class="disabled"><span><i style="font-weight: bold" class="fa fa-angle-left"></i></span></li>*/
/*             {% endif %}*/
/* */
/*             <li><span>{{ __('general.phrase.page') }} {{ currentpage }} / {{ pagecount }}</span></li>*/
/* */
/*             {% if currentpage < pagecount %}*/
/*                 <li><a href="?page={{ currentpage + 1 }}"><i style="font-weight: bold" class="fa fa-angle-right"></i></a></li>*/
/*                 <li><a href="?page={{ pagecount }}"><i style="font-weight: bold" class="fa fa-angle-double-right"></i></a></li>*/
/*             {% else %}*/
/*                 <li class="disabled"><span><i style="font-weight: bold" class="fa fa-angle-right"></i></span></li>*/
/*                 <li class="disabled"><span><i style="font-weight: bold" class="fa fa-angle-double-right"></i></span></li>*/
/*             {% endif %}*/
/*         </ul>*/
/* */
/* {% endmacro %}*/
/* */
/* {% macro changelog_details(entry) %}*/
/*     {% import '@bolt/_macro/_macro.twig' as macro %}*/
/*     {% from '@bolt/_buic/_moment.twig' import buic_moment %}*/
/* */
/*     {% set preview_w = 200 %}*/
/*     {% set preview_h = 150 %}*/
/* */
/*     <h3>*/
/*         "<a href="{{ path('editcontent', {'contenttypeslug': entry.contenttype, 'id': entry.contentid}) }}">{{ entry.title }}</a>"*/
/*         <em><span class="time">{{ _self.changelog_mutation(entry.mutation_type) }} {{ buic_moment(entry.date) }}</span>*/
/*         {{ __('general.phrase.by') }}</em> <strong>{{ macro.userlink(entry.ownerid|default('')) }}</strong>*/
/*     </h3>*/
/* */
/*     <div class="changelog-details">*/
/*         <div class="user">*/
/*            <i class="icon icon-user"></i>*/
/*         </div>*/
/* */
/*         <div class="body">*/
/*             <p>*/
/*                 {% if config.get('general/changelog/enabled') %}*/
/*                     {% if entry.comment %}<h4><strong>Comment</strong>: {{ entry.comment }}</h4>{% endif %}*/
/*                 {% endif %}*/
/*             </p>*/
/* */
/*             <table class="table table-bordered table-condensed table-changelog-details">*/
/*                 <thead>*/
/*                     <tr>*/
/*                         <th>{{ __('general.phrase.field') }}</th>*/
/*                         <th>{{ __('general.phrase.value-old') }}</th>*/
/*                         <th>{{ __('general.phrase.value-new') }}</th>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 {% for key, field in entry.changedfields %}*/
/*                     <tr>*/
/*                         <td><strong>{{ field.label }}</strong></td>*/
/* */
/*                         {% if field.type == 'normal' %}*/
/*                             <td class="change-log-item">*/
/*                                 {{ field.before.render }}*/
/*                             </td>*/
/*                             <td class="change-log-item">*/
/*                                 {{ field.after.render }}*/
/*                             </td>*/
/*                         {% elseif field.type == 'html' %}*/
/*                             <td class="change-log-item">*/
/*                                 {{ field.before.render|raw }}*/
/*                             </td>*/
/*                             <td class="change-log-item">*/
/*                                 {{ field.after.render|raw }}*/
/*                             </td>*/
/*                         {% elseif field.type == 'filelist' %}*/
/*                             <td class="change-log-item">*/
/*                                 {% for file in field.before.render %}*/
/*                                     <strong>File:</strong> {{ file.filename }}<br>*/
/*                                     <strong>Title:</strong> {{ file.title }}*/
/* */
/*                                     {% if not loop.last %}*/
/*                                     <br><br>*/
/*                                     {% endif %}*/
/*                                 {% endfor %}*/
/*                             </td>*/
/*                             <td class="change-log-item">*/
/*                                 {% for file in field.after.render %}*/
/*                                     <strong>File:</strong> {{ file.filename }}<br>*/
/*                                     <strong>Title:</strong> {{ file.title }}*/
/* */
/*                                     {% if not loop.last %}*/
/*                                     <br><br>*/
/*                                     {% endif %}*/
/*                                 {% endfor %}*/
/*                             </td>*/
/*                         {% elseif field.type == 'geolocation' %}*/
/*                             <td class="change-log-item">*/
/*                                 <strong>Address:</strong> {{ field.before.render.address }}<br>*/
/*                                 <strong>Latitude:</strong> {{ field.before.render.latitude }}<br>*/
/*                                 <strong>Longitude:</strong> {{ field.before.render.longitude }}<br>*/
/*                                 <strong>Matched address:</strong> {{ field.before.render.formatted_address }}*/
/*                             </td>*/
/*                             <td class="change-log-item">*/
/*                                 <strong>Address:</strong> {{ field.after.render.address }}<br>*/
/*                                 <strong>Latitude:</strong> {{ field.after.render.latitude }}<br>*/
/*                                 <strong>Longitude:</strong> {{ field.after.render.longitude }}<br>*/
/*                                 <strong>Matched address:</strong> {{ field.after.render.formatted_address }}*/
/*                             </td>*/
/*                         {% elseif field.type == 'image' %}*/
/*                             <td class="change-log-item">*/
/*                                 <strong>File:</strong> {{ field.before.render.file }}<br>*/
/*                                 <strong>Title:</strong> {{ field.before.render.title }}<br>*/
/*                                 <div class="content-preview imageholder" id="thumbnail-{{ key }}">*/
/*                                 {% if field.before.render.file != '' %}*/
/*                                     {% set preview_path = field.before.render.file|thumbnail(preview_w, preview_h, 'c') %}*/
/*                                     <img src="{{ preview_path }}" alt="Preview" width="{{ preview_w }}" height="{{ preview_h }}">*/
/*                                 {% endif %}*/
/*                                 </div>*/
/*                             </td>*/
/*                             <td class="change-log-item">*/
/*                                 <strong>File:</strong> {{ field.after.render.file }}<br>*/
/*                                 <strong>Title:</strong> {{ field.after.render.title }}<br>*/
/*                                 <div class="content-preview imageholder" id="thumbnail-{{ key }}">*/
/*                                 {% if field.after.render.file != '' %}*/
/*                                     {% set preview_path = field.after.render.file|thumbnail(preview_w, preview_h, 'c') %}*/
/*                                     <img src="{{ preview_path }}" alt="Preview" width="{{ preview_w }}" height="{{ preview_h }}">*/
/*                                 {% endif %}*/
/*                                 </div>*/
/*                             </td>*/
/*                         {% elseif field.type == 'imagelist' %}*/
/*                             <td class="change-log-item">*/
/*                                 {% for image in field.before.render %}*/
/*                                     <strong>File:</strong> {{ image.filename }}<br>*/
/*                                     <strong>Title:</strong> {{ image.title }}<br>*/
/*                                     <div class="content-preview imageholder" id="thumbnail-{{ key }}">*/
/*                                     {% if image.filename != '' %}*/
/*                                         {% set preview_path = image.filename|thumbnail(preview_w, preview_h, 'c') %}*/
/*                                         <img src="{{ preview_path }}" alt="Preview" width="{{ preview_w }}" height="{{ preview_h }}">*/
/*                                     {% endif %}*/
/*                                     </div>*/
/* */
/*                                     {% if not loop.last %}*/
/*                                     <br>*/
/*                                     {% endif %}*/
/*                                 {% endfor %}*/
/*                             </td>*/
/*                             <td class="change-log-item">*/
/*                                 {% for image in field.after.render %}*/
/*                                     <strong>File:</strong> {{ image.filename }}<br>*/
/*                                     <strong>Title:</strong> {{ image.title }}<br>*/
/*                                     <div class="content-preview imageholder" id="thumbnail-{{ key }}">*/
/*                                     {% if image.filename != '' %}*/
/*                                         {% set preview_path = image.filename|thumbnail(preview_w, preview_h, 'c') %}*/
/*                                         <img src="{{ preview_path }}" alt="Preview" width="{{ preview_w }}" height="{{ preview_h }}">*/
/*                                     {% endif %}*/
/*                                     </div>*/
/* */
/*                                     {% if not loop.last %}*/
/*                                     <br>*/
/*                                     {% endif %}*/
/*                                 {% endfor %}*/
/*                             </td>*/
/*                         {% elseif field.type == 'markdown' or field.type == 'textarea' %}*/
/*                             <td class="change-log-item">*/
/*                                 <pre style="white-space: pre-wrap; background-color: inherit; border: 0;">{{ field.before.render }}</pre>*/
/*                             </td>*/
/*                             <td class="change-log-item">*/
/*                                 <pre style="white-space: pre-wrap; background-color: inherit; border: 0;">{{ field.after.render }}</pre>*/
/*                             </td>*/
/*                         {% elseif field.type == 'select' %}*/
/*                             <td class="change-log-item">*/
/*                                 {% if field.before.render is iterable %}*/
/*                                     <ul>*/
/*                                     {% for select in field.before.render %}*/
/*                                         <li>{{ select }}</li>*/
/*                                     {% endfor %}*/
/*                                     </ul>*/
/*                                 {% else %}*/
/*                                     {{ field.before.render }}*/
/*                                 {% endif %}*/
/*                             </td>*/
/*                             <td class="change-log-item">*/
/*                                 {% if field.after.render is iterable %}*/
/*                                     <ul>*/
/*                                     {% for select in field.after.render %}*/
/*                                         <li>{{ select }}</li>*/
/*                                     {% endfor %}*/
/*                                     </ul>*/
/*                                 {% else %}*/
/*                                     {{ field.after.render }}*/
/*                                 {% endif %}*/
/*                             </td>*/
/*                         {% elseif field.type == 'video' %}*/
/*                             <td class="change-log-item">*/
/*                                 <strong>Title:</strong> {{ field.before.render.title }}<br>*/
/*                                 <strong>URL:</strong> {{ field.before.render.url }}<br>*/
/*                                 <strong>Size:</strong> {{ field.before.render.width }} x {{ field.before.render.height }}<br>*/
/*                                 <div class="imageholder" id="thumbnail-{{ key }}">*/
/*                                     {% if field.before.render.thumbnail|default('') %}*/
/*                                         <img src="{{ field.before.render.thumbnail }}" width="200" height="150">*/
/*                                     {% endif %}*/
/*                                 </div>*/
/*                                 <div class="hidden video" id="{{ key }}">{{ field.after.render.html|raw }}</div>*/
/*                             </td>*/
/*                             <td class="change-log-item">*/
/*                                 <strong>Title:</strong> {{ field.after.render.title }}<br>*/
/*                                 <strong>URL:</strong> {{ field.after.render.url }}<br>*/
/*                                 <strong>Size:</strong> {{ field.after.render.width }} x {{ field.after.render.height }}<br>*/
/*                                 <div class="imageholder" id="thumbnail-{{ key }}">*/
/*                                     {% if field.after.render.thumbnail|default('') %}*/
/*                                         <img src="{{ field.after.render.thumbnail }}" width="{{ preview_w }}" height="{{ preview_h }}">*/
/*                                     {% endif %}*/
/*                                 </div>*/
/*                                 <div class="hidden video" id="{{ key }}">{{ field.after.render.html|raw }}</div>*/
/*                             </td>*/
/*                         {% endif %}*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/*     </div>*/
/* {% endmacro %}*/
/* */
/* */
/* {% macro changelog_mutation(raw) %}*/
/*     {% set mapping = {'UPDATE': 'changed', 'INSERT': 'created', 'DELETE': 'deleted', 'HOLD': 'put on hold', 'PUBLISH': 'published', 'DRAFT': 'depublished'} %}*/
/*     {% if mapping[raw] is defined %}{{ mapping[raw] }}{% else %}{{ raw }}{% endif %}*/
/* {% endmacro %}*/
/* */
