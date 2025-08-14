import { defineConfig } from 'vite'
import tailwindcss from '@tailwindcss/vite'
import path from 'path'
import VitePluginGenerateHtmlFiles from 'vite-plugin-generate-html'

export default defineConfig({
  plugins: [
    tailwindcss(),
    VitePluginGenerateHtmlFiles({
        publicDir: '/',
        jsEntryFile: path.resolve('dist', "scripts.html"),
        cssEntryFile: path.resolve('dist', "styles.html")
    })
  ],
  build: {
    outDir: 'dist',
    rollupOptions: {
      input: 'src/index.js'
    }
  }
})