<?php

/**
 * ASYX Group - Root Entry Point for Shared Hosting
 * Redirects all traffic to the public/ directory
 */

// Redirect to public folder
header('Location: public/');
exit;
