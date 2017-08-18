<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_088e3193ef70bb6bafbdb5b67faf1b58e27d448c89ca0ff9004d8adcb50a3518 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_46a00bc12e0d084ce006525c833c94423af00d293d7a2ce8972e7de6efa7174d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46a00bc12e0d084ce006525c833c94423af00d293d7a2ce8972e7de6efa7174d->enter($__internal_46a00bc12e0d084ce006525c833c94423af00d293d7a2ce8972e7de6efa7174d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_35f74eebd5be6d0ce407466110c994d130d212313097417d6271fc08d05ca5f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35f74eebd5be6d0ce407466110c994d130d212313097417d6271fc08d05ca5f3->enter($__internal_35f74eebd5be6d0ce407466110c994d130d212313097417d6271fc08d05ca5f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_46a00bc12e0d084ce006525c833c94423af00d293d7a2ce8972e7de6efa7174d->leave($__internal_46a00bc12e0d084ce006525c833c94423af00d293d7a2ce8972e7de6efa7174d_prof);

        
        $__internal_35f74eebd5be6d0ce407466110c994d130d212313097417d6271fc08d05ca5f3->leave($__internal_35f74eebd5be6d0ce407466110c994d130d212313097417d6271fc08d05ca5f3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ebe76a25d933cf4758de51cbb299ee9041d0376a4ff54d98a77d04036b7772af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebe76a25d933cf4758de51cbb299ee9041d0376a4ff54d98a77d04036b7772af->enter($__internal_ebe76a25d933cf4758de51cbb299ee9041d0376a4ff54d98a77d04036b7772af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_195d0b1f4dcbd4a5cc8d6407616caabf3efdd63eb021c4328802d89c71cd97ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_195d0b1f4dcbd4a5cc8d6407616caabf3efdd63eb021c4328802d89c71cd97ba->enter($__internal_195d0b1f4dcbd4a5cc8d6407616caabf3efdd63eb021c4328802d89c71cd97ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_195d0b1f4dcbd4a5cc8d6407616caabf3efdd63eb021c4328802d89c71cd97ba->leave($__internal_195d0b1f4dcbd4a5cc8d6407616caabf3efdd63eb021c4328802d89c71cd97ba_prof);

        
        $__internal_ebe76a25d933cf4758de51cbb299ee9041d0376a4ff54d98a77d04036b7772af->leave($__internal_ebe76a25d933cf4758de51cbb299ee9041d0376a4ff54d98a77d04036b7772af_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_95b224c6a353031922cc059d8df1862c09f1076b42afaa0a58924bbcea4f9b4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95b224c6a353031922cc059d8df1862c09f1076b42afaa0a58924bbcea4f9b4c->enter($__internal_95b224c6a353031922cc059d8df1862c09f1076b42afaa0a58924bbcea4f9b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e32e8f6ca7b43b72245df8f2beeeff591f169d886d27193628f7111119e91756 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e32e8f6ca7b43b72245df8f2beeeff591f169d886d27193628f7111119e91756->enter($__internal_e32e8f6ca7b43b72245df8f2beeeff591f169d886d27193628f7111119e91756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_e32e8f6ca7b43b72245df8f2beeeff591f169d886d27193628f7111119e91756->leave($__internal_e32e8f6ca7b43b72245df8f2beeeff591f169d886d27193628f7111119e91756_prof);

        
        $__internal_95b224c6a353031922cc059d8df1862c09f1076b42afaa0a58924bbcea4f9b4c->leave($__internal_95b224c6a353031922cc059d8df1862c09f1076b42afaa0a58924bbcea4f9b4c_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_7d3adca1031e5e9a76878af730182b6d096cfb90cefb4a747e83b8204461aad4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d3adca1031e5e9a76878af730182b6d096cfb90cefb4a747e83b8204461aad4->enter($__internal_7d3adca1031e5e9a76878af730182b6d096cfb90cefb4a747e83b8204461aad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3046a122e218447d4760a7a2fa741259ee4793d07b2e27cba0c8232ec9289f7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3046a122e218447d4760a7a2fa741259ee4793d07b2e27cba0c8232ec9289f7f->enter($__internal_3046a122e218447d4760a7a2fa741259ee4793d07b2e27cba0c8232ec9289f7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3046a122e218447d4760a7a2fa741259ee4793d07b2e27cba0c8232ec9289f7f->leave($__internal_3046a122e218447d4760a7a2fa741259ee4793d07b2e27cba0c8232ec9289f7f_prof);

        
        $__internal_7d3adca1031e5e9a76878af730182b6d096cfb90cefb4a747e83b8204461aad4->leave($__internal_7d3adca1031e5e9a76878af730182b6d096cfb90cefb4a747e83b8204461aad4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/html/freshblog/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
