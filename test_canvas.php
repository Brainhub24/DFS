<?php

class DebianShellCanvas {
    private $width;
    private $height;
    private $styles;

    /**
     * Constructor to initialize my damn fucking shell window...
     * Currently i don´t know exactly how to do... but i will soon do it! xD
     * NEED MORE COKE (NOT COKE[S]^^) TO WROTE UP THIS SHIT!
     *
     * Concept Idea color settings
     * ---------------------------
     * @param int $width Width of the canvas (default: 800)
     * @param int $height Height of the canvas (default: 600)
     * @param string $theme Theme for styling ('dark' or 'light', default: 'dark')
     */
    public function __construct($width = 800, $height = 600, $theme = 'DFS__dark') {
        $this->width = $width;
        $this->height = $height;
        $this->setTheme($theme);
    }

    /**
     * Testing theme colors based on the selected theme.
     *
     * @param string $theme
     */
    private function setTheme($theme) {
        switch ($theme) {
            case 'DFS__dark':
                $this->styles = [
                    'background' => '#2e3436',
                    'titleBar' => '#3b424a',
                    'textColor' => '#ffffff',
                ];
                break;
            case 'DFS__light':
                $this->styles = [
                    'background' => '#f5f5f5',
                    'titleBar' => '#e0e0e0',
                    'textColor' => '#000000',
                ];
                break;
            default:
                $this->styles = [
                    'background' => '#2e3436',
                    'titleBar' => '#3b424a',
                    'textColor' => '#ffffff',
                ];
        }
    }

# BRAINSTORMING...
