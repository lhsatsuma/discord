declare global{
    var entryMode: string;
    var startTimeApp: Date;   
}

globalThis.entryMode = 'app';
globalThis.startTimeApp = new Date();
const {default: entryPointApp} = await import('#src/entryPointApp.ts');
const main = new entryPointApp();
try{
    await main.init();
}catch(e){
    console.error('Error initializing app:', e);
    process.exit();
}